<?php
/**
 * @author JKetelaar
 */

namespace JKetelaar\fut\api\market\handler;

use JKetelaar\fut\api\ImprovedEnum;

/**
 * Class Method
 * @method static Method GET()
 * @method static Method POST()
 * @method static Method PUT()
 * @method static Method DELETE()
 * @package JKetelaar\fut\api\market\handler
 */
class Method extends ImprovedEnum {

    const GET    = 'GET';
    const POST   = 'POST';
    const PUT    = 'PUT';
    const DELETE = 'DELETE';

}