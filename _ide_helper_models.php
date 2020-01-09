<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\PartFranchise
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\PartFranchise onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PartFranchise withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\PartFranchise withoutTrashed()
 */
	class PartFranchise extends \Eloquent {}
}

namespace App{
/**
 * App\Category
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Category onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Category withoutTrashed()
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\PartManufacturer
 *
 * @property int $id
 * @property string $name
 * @property string|null $location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\PartModel[] $models
 * @property-read int|null $models_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\PartManufacturer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PartManufacturer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\PartManufacturer withoutTrashed()
 */
	class PartManufacturer extends \Eloquent {}
}

namespace App{
/**
 * App\Enquiry
 *
 * @property int $id
 * @property int $supplier_id
 * @property int $user_id
 * @property string|null $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Part[] $parts
 * @property-read int|null $parts_count
 * @property-read \App\Supplier $supplier
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Enquiry onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Enquiry withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Enquiry withoutTrashed()
 */
	class Enquiry extends \Eloquent {}
}

namespace App{
/**
 * App\Order
 *
 * @property int $id
 * @property string $type
 * @property string $status
 * @property string|null $due_date
 * @property int $supplier_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Part[] $parts
 * @property-read int|null $parts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Receipt[] $receipts
 * @property-read int|null $receipts_count
 * @property-read \App\Supplier $supplier
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Order onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Order withoutTrashed()
 */
	class Order extends \Eloquent {}
}

namespace App{
/**
 * App\Purchasable
 *
 * @property int $id
 * @property string $purchasable_type
 * @property int $purchasable_id
 * @property int $part_id
 * @property int $quantity
 * @property int $delivered
 * @property float|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereDelivered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable wherePartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable wherePurchasableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable wherePurchasableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereUpdatedAt($value)
 */
	class Purchasable extends \Eloquent {}
}

namespace App{
/**
 * App\Preference
 *
 * @property int $id
 * @property string $preferable_type
 * @property int $preferable_id
 * @property string $key
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Preference onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference wherePreferableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference wherePreferableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Preference withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Preference withoutTrashed()
 */
	class Preference extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $api_token
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Enquiry[] $enquiries
 * @property-read int|null $enquiries_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $userable
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereApiToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\PurchaseOrder
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PurchaseOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PurchaseOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PurchaseOrder query()
 */
	class PurchaseOrder extends \Eloquent {}
}

namespace App{
/**
 * App\Contact
 *
 * @property int $id
 * @property string $contactable_type
 * @property int $contactable_id
 * @property string $type
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Contact onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereContactableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereContactableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contact whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Contact withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Contact withoutTrashed()
 */
	class Contact extends \Eloquent {}
}

namespace App{
/**
 * App\Receipt
 *
 * @property int $id
 * @property int $order_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Order $order
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Part[] $parts
 * @property-read int|null $parts_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Receipt onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Receipt withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Receipt withoutTrashed()
 */
	class Receipt extends \Eloquent {}
}

namespace App{
/**
 * App\Customer
 *
 * @property int $id
 * @property string $account_name
 * @property int|null $contact_person
 * @property string $address
 * @property string $mobile
 * @property string $telephone
 * @property string $account_type
 * @property string $account_ref
 * @property float $credit_limit
 * @property string $tax_type
 * @property float $tax_perc
 * @property string $status
 * @property int|null $stop_account
 * @property int|null $on_hold
 * @property string|null $comments
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Staff|null $contact
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereAccountRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereAccountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereContactPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereCreditLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereOnHold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereStopAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereTaxPerc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App{
/**
 * App\BackOrder
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\BackOrder onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BackOrder withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\BackOrder withoutTrashed()
 */
	class BackOrder extends \Eloquent {}
}

namespace App{
/**
 * App\Company
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $contact
 * @property string|null $motto
 * @property string|null $skin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Branch[] $branches
 * @property-read int|null $branches_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Company onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereMotto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereSkin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Company withoutTrashed()
 */
	class Company extends \Eloquent {}
}

namespace App{
/**
 * App\Branch
 *
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property string|null $skin
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Staff[] $staff
 * @property-read int|null $staff_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Branch onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch whereSkin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Branch whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Branch withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Branch withoutTrashed()
 */
	class Branch extends \Eloquent {}
}

namespace App{
/**
 * App\Supplier
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $contact
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Part[] $parts
 * @property-read int|null $parts_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier withoutTrashed()
 */
	class Supplier extends \Eloquent {}
}

namespace App{
/**
 * App\PartModel
 *
 * @property int $id
 * @property string $name
 * @property int|null $manufacturer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\PartManufacturer|null $manufacturer
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\PartModel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PartModel withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\PartModel withoutTrashed()
 */
	class PartModel extends \Eloquent {}
}

namespace App{
/**
 * App\Part
 *
 * @property int $id
 * @property int $number
 * @property string $name
 * @property float $retail_price
 * @property float $cost_price
 * @property int $category_id
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int|null $franchise_id
 * @property int|null $supplier_id
 * @property int $quantity
 * @property int|null $reorder
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Enquiry[] $enquiries
 * @property-read int|null $enquiries_count
 * @property-read \App\PartFranchise|null $franchise
 * @property-read \Spatie\MediaLibrary\Models\Media $image
 * @property-read \App\PartManufacturer $manufacturer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\PartModel $model
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Supplier|null $supplier
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Part onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereCostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereFranchiseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereReorder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereRetailPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Part withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Part withoutTrashed()
 */
	class Part extends \Eloquent {}
}

namespace App{
/**
 * App\Vehicle
 *
 * @property int $id
 * @property int $customer_id
 * @property int $staff_id
 * @property string $reg_no
 * @property int $part_model_id
 * @property int $part_franchise_id
 * @property string $chasis_no
 * @property string $origin
 * @property string $engine_no
 * @property string $colour
 * @property string $odometer_unit
 * @property string $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Customer $customer
 * @property-read \App\Staff $staff
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Vehicle onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereChasisNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereColour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereEngineNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereOdometerUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle wherePartFranchiseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle wherePartModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereRegNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vehicle withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Vehicle withoutTrashed()
 */
	class Vehicle extends \Eloquent {}
}

namespace App{
/**
 * App\Staff
 *
 * @property int $id
 * @property int|null $branch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Branch|null $branch
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Staff onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staff withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Staff withoutTrashed()
 */
	class Staff extends \Eloquent {}
}

