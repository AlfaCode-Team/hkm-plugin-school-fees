<?php

declare(strict_types=1);

namespace Plugins\SchoolFees\API\Contracts;

/**
 * Published contract for `school.fees`.
 *
 * Fee configuration and the payments ledger. Owns the ONE FeeResolver: individual (0 = exemption) -> class+term -> class+type -> boarding.
 *
 * Legacy source : accounter/ (73 files), payment_types, class_fees, class_type_fees, class_term_fees, individual_fees, payments, recipt.php, facture_*.php
 * Legacy tables : payments, payment_types, payment_groups, payment_delay, class_fees, class_type_fees, class_term_fees, individual_fees, exchange_rates, exchange_rates_daily
 *
 * Consumers declare `"requires": ["school.fees"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolFeesContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
