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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InventoryBinController extends Controller
{

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

        $items->sortByDesc('deleted_at');

        $items = $items->map(function ($item) {
            $item->setAttribute('type', Str::singular($item->getTable()));
            return $item;
        });

        return $items;
    }

    public function restore(Request $request) {
        DB::table(Str::plural($request->get('type')))
            ->where('id', $request->get('id'))
            ->update(['deleted_at' => null]);
    }
}
