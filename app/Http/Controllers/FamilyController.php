<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Purchase;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index()
    {
        $rootMember = Member::whereNull('ParentID')->first();

        // dd($rootMember);

        $memberSales = $this->calculateSales();

        return view('family_tree.index', compact('rootMember', 'memberSales'));
    }

    private function calculateSales()
    {
        $salesData = [];

        $personalSales = Purchase::selectRaw('MemberID, SUM(Amount) as total_sales')
            ->groupBy('MemberID')
            ->pluck('total_sales', 'MemberID')
            ->toArray();

        $allMembers = Member::all();

        // Initialize sales data
        foreach ($allMembers as $member) {
            $salesData[$member->MemberID] = [
                'personal_sales' => $personalSales[$member->MemberID] ?? 0,
                'group_sales' => 0,
            ];
        }

        foreach ($allMembers as $member) {
            $salesData[$member->MemberID]['group_sales'] = $this->getGroupSales($member->MemberID, $personalSales, $allMembers);
        }

        return $salesData;
    }

    private function getGroupSales($memberId, $personalSales, $allMembers)
    {
        $totalSales = $personalSales[$memberId] ?? 0;

        foreach ($allMembers as $member) {
            if ($member->ParentID == $memberId) {
                $totalSales += $this->getGroupSales($member->MemberID, $personalSales, $allMembers);
            }
        }

        return $totalSales;
    }
}