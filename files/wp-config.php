<?php
define( 'DB_NAME', '{{ DB_NAME }}' );
define( 'DB_USER', '{{ DB_USER }}' );
define( 'DB_PASSWORD', '{{ DB_PASS}}' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
define( 'AUTH_KEY',         'C5@V]!1[-9VNN;/<4_6SdQH|_SkaUD3FOn|VHWkygSH^h!I>FV]G.:}p6$(`A;a<' );
define( 'SECURE_AUTH_KEY',  'c;WV$X2PwP#}x5d)dQ]oQeyyZZ)Qcj901NG6vS/zwe!([_A1(n[<yE{GIVWIjZ:0' );
define( 'LOGGED_IN_KEY',    'U(-azn;P<kM)q@mU9ldIW)I2*Vn9. J{Iz,Z}~.9st|Iv8v]kKHqo)tYOl@sTAFm' );
define( 'NONCE_KEY',        ' T>_O i$6h}dHY2H%c(Z}MJZsy-bP HP*bdbP4VxB8K]+Gkz{ns7@b&HlFZMfi<m' );
define( 'AUTH_SALT',        'ucXK8FcQLv<=%)7xBcZ-=6eP#%u:#7-B7TD%&#GmRfD#`>MM7EOkG,Px0avXDTWa' );
define( 'SECURE_AUTH_SALT', 'b7oMEm{yW&2J4@nhXM^;N#_$&cM<6l|UZk0d0N.e:ilV)iUTp5(9-r9_5]bMr3bD' );
define( 'LOGGED_IN_SALT',   '^G0xzKmog*yrW_HBwD?L(x&2aRj;QKKmLv$8^K(ERCm3C[wd?e^K-=t[ZsjwyIWW' );
define( 'NONCE_SALT',       '39x+W6lTpqX=/5HONK~q^2{t?OGP56Ca:unQM^cjj(Z^5]ll!{+I>_a2kd7G^@fQ' );
$table_prefix = 'wp_';

define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';