<?php

namespace DrSlump\Protobuf\Codec;

use DrSlump\Protobuf;

/**
 * This codec serializes and unserializes from/to Json strings
 * where the keys represent the field's tag numbers.
 *
 * It makes use of the PhpArray codec to do the heavy work to just
 * take care of converting the array to/from Json strings.
 */
class JsonTagMap extends Json
    implements Protobuf\CodecInterface
{
    protected $options = array(
        'lazy'      => true,
        'tags'      => true,
        'strict'    => true,
    );
}