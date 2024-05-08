<?php

namespace App\Models;

use App\Enums\TransactionStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $group_to_event_id
 * @property int|null $users_id
 * @property int $total
 * @property int $tax
 * @property string $payment_method
 * @property string $invoice_id
 * @property string $reference
 * @property string $status
 * @method static \Database\Factories\TransactionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereGroupToEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUsersId($value)
 * @mixin \Eloquent
 */
class Transaction extends Model
{
    use HasFactory;

    /**
     * Getting transaction status
     *
     * @return Collection
     */
    public static function getStatutes(): Collection
    {
        return collect(TransactionStatusEnum::cases())->pluck('value');
    }
}
