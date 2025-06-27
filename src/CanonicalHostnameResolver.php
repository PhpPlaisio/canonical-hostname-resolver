<?php
declare(strict_types=1);

namespace Plaisio\CanonicalHostnameResolver;

/**
 * Interface for CanonicalHostnameResolvers. A CanonicalHostnameResolver resolves the preferred hostname (a.k.a. fully
 * qualified domain name (FQDN)) of a website.
 *
 * @property-read string canonicalHostname The canonical hostname (a. k. a. preferred fully qualified domain name).
 */
interface CanonicalHostnameResolver
{
  // Nothing to implement.
}

//----------------------------------------------------------------------------------------------------------------------
