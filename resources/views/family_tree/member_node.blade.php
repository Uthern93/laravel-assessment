<li>
    <div class="member-box">
        <strong>{{ $member->Name }}</strong> <br>
        <small>Joined: {{ $member->DateJoin }}</small> <br>
        <small>Personal Sales: ${{ number_format($memberSales[$member->id]['personal_sales'] ?? 0, 2) }}</small> <br>
        <small>Group Sales: ${{ number_format($memberSales[$member->id]['group_sales'] ?? 0, 2) }}</small>
    </div>

    @if ($member->children->count() > 0)
        <ul>
            @foreach ($member->children as $child)
                @include('family_tree.member_node', ['member' => $child, 'memberSales' => $memberSales])
            @endforeach
        </ul>
    @endif
</li>
