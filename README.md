# hkm-plugin-school-fees

> Solves **`school.fees`** · namespace **`Plugins\SchoolFees\`** · on-demand GDA module
> Family: Elimu / school domain

Fee configuration and the payments ledger. Owns the ONE FeeResolver: individual (0 = exemption) -> class+term -> class+type -> boarding.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolFeesContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `accounter/ (73 files), payment_types, class_fees, class_type_fees, class_term_fees, individual_fees, payments, recipt.php, facture_*.php` |
| Legacy tables | `payments, payment_types, payment_groups, payment_delay, class_fees, class_type_fees, class_term_fees, individual_fees, exchange_rates, exchange_rates_daily` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `audit.trail`
- `school.people`
- `school.classes`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.fees"] }
```

```php
$svc = $container->make(\Plugins\SchoolFees\API\Contracts\SchoolFeesContract::class);
```

## Installing

```bash
hkm plugins enable SchoolFees <project>
```
