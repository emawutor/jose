<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2016 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Object;

/**
 * Interface StorableJWKInterface.
 */
interface StorableJWKInterface extends JWKInterface
{
    /**
     * Regenerate a completely new JWK
     */
    public function regen();

    /**
     * Delete the JWK
     */
    public function delete();
}
