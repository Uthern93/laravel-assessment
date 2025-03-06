<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tblMember', function (Blueprint $table) {
            $table->string('MemberID')->primary();
            $table->string('Name');
            $table->date('DateJoin');
            $table->string('TelM');
            $table->string('ParentID')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tblMember');
    }
};

