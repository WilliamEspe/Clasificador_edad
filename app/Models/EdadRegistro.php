<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EdadRegistro extends Model
{
    use HasFactory;

    protected $fillable = ['edad'];
}

// database/migrations/xxxx_xx_xx_create_edad_registros_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('edad_registros', function (Blueprint $table) {
            $table->id();
            $table->integer('edad');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('edad_registros');
    }
};
