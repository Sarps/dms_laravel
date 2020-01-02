<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Category;
use App\Company;
use App\Enquiry;
use App\Order;
use App\Part;
use App\PartFranchise;
use App\PartManufacturer;
use App\PartModel;
use App\Receipt;
use App\Supplier;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class InventoryBinController extends Controller
{
    //
    public function index() {
        $items = collect([])
            ->merge(Company::onlyTrashed()->get())
            ->merge(Branch::onlyTrashed()->get())
            ->merge(Category::onlyTrashed()->get())
            ->merge(Enquiry::onlyTrashed()->get())
            ->merge(Order::onlyTrashed()->get())
            ->merge(Part::onlyTrashed()->get())
            ->merge(PartManufacturer::onlyTrashed()->get())
            ->merge(PartModel::onlyTrashed()->get())
            ->merge(PartFranchise::onlyTrashed()->get())
            ->merge(Receipt::onlyTrashed()->get())
            ->merge(Supplier::onlyTrashed()->get())
            ->merge(User::onlyTrashed()->get());

        $items->sortByDesc('created_at');

        return $items;
    }
}
