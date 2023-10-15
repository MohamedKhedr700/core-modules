<?php

namespace Raid\Core\Modules\Account\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Jenssegers\Mongodb\Relations\EmbedsOne;
use Laravel\Sanctum\HasApiTokens;
use Raid\Core\Modules\Account\Contracts\AccountInterface;
use Raid\Core\Modules\Account\Models\ModelFilter\AccountFilter;
use Raid\Core\Modules\Account\Traits\Auth\Accountable;
use Raid\Core\Modules\Account\Traits\Auth\Authenticatable as AuthenticatableResolver;
use Raid\Core\Modules\Account\Traits\Auth\Deviceable;
use Raid\Core\Modules\Account\Traits\Auth\Loginable;
use Raid\Core\Modules\Account\Traits\Auth\Relationable;
use Raid\Core\Modules\Account\Traits\Auth\Tokenable;
use Raid\Core\Modules\Account\Traits\Auth\WithPassword;
use Raid\Core\Modules\Attachment\Models\Attachment;
use Raid\Core\Models\Contracts\ModelInterface;
use Raid\Core\Models\Model;

class Account extends Model implements ModelInterface, AccountInterface, Authenticatable
{
    use Accountable,
        AuthenticatableResolver,
        Deviceable,
        HasApiTokens,
        Loginable,
        Relationable,
        Tokenable,
        WithPassword;

    /**
     * {@inheritdoc}
     */
    protected string $filter = AccountFilter::class;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [];

    /**
     * {@inheritdoc}
     */
    protected $appends = [];

    /**
     * {@inheritdoc}
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Account fillable attributes.
     */
    protected array $accountFillable = [
        'account_type', 'first_name', 'last_name', 'email',
        'country_code', 'phone', 'full_phone', 'password',
        'devices', 'is_disabled', 'is_verified', 'is_active',
        'last_login_at', 'last_login_ip', 'current_device_id',
        'image_id', 'image',
    ];

    /**
     * {@inheritdoc}
     */
    public static function boot(): void
    {
        parent::boot();

        static::creating(function (Account $account) {
            static::fillAccountType($account);
        });
    }

    /**
     * Fill account type attribute.
     */
    public static function fillAccountType(Account $account): void
    {
        $account->fillAttribute('account_type', $account->accountType());
    }

    /**
     * Get the fillable attributes for the model.
     */
    public function getFillable(): array
    {
        return array_merge(parent::getFillable(), $this->accountFillable);
    }

    /**
     * {@inheritdoc}
     */
    public function attachmentId(): string
    {
        return $this->attribute('image_id', '');
    }

    /**
     * {@inheritdoc}
     */
    public function attachment(): EmbedsOne
    {
        return $this->embedsOne(Attachment::class, 'image');
    }

    /**
     * {@inheritdoc}
     */
    public function embedAttachment(?Attachment $attachment): void
    {
        $this->forceFillAttribute('image', $attachment?->toEmbed());
    }
}
