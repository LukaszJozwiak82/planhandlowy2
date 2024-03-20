<?php
declare(strict_types=1);

namespace App\Services\Employee;

use App\Models\Sale;
use App\Models\User;

final class SaleService
{

    public function index(User $user)
    {
        return $user->sales->load('client');
    }

    public function search(User $user, $selectedYear, $selectedQuarter)
    {
        return $user->sales()
            ->where('year', $selectedYear)
            ->where('quarter', $selectedQuarter)
            ->get();
    }

    public function delete(Sale $sale)
    {
        $sale->delete();
    }

}
