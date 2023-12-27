Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address")->nullable();
            // $table->foreign('address_city_id')->references('id')->on('addresses');
            $table->foreign('caste_id')->references('id')->on('castes');
            $table->foreign('reference_id')->references('id')->on('references');  
            $table->tinyInteger('status');          
            $table->timestamps();
        });


    
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string("city_name");
            $table->tinyInteger("status");
            $table->timestamps();
        });



        Schema::create('castes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->tinyInteger("status");
            $table->timestamps();
        });



        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->tinyInteger("status");
            $table->timestamps();
        });