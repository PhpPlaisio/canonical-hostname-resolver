<?php
declare(strict_types=1);

namespace SetBased\Abc\CanonicalHostnameResolver;

/**
 * Interface for CanonicalHostnameResolvers. A CanonicalHostnameResolver resolves the preferred hostname (a.k.a. fully
 * qualified domain name (FQDN)) of a website.
 */
interface CanonicalHostnameResolver
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the canonical hostname (a.k.a. preferred fully qualified domain name).
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function getCanonicalHostname(): string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
