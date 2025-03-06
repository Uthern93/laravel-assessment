<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tblPurchase', function (Blueprint $table) {
            $table->string('BillNo')->primary();
            $table->string('MemberID');
            $table->date('SalesDate');
            $table->decimal('Amount', 10, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblPurchase');
    }
};

