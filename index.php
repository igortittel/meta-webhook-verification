<?php
if ($_GET['hub_mode'] === 'subscribe' && $_GET['hub_verify_token'] === 'Jebal2pes!') {
    echo $_GET['hub_challenge'];
} else {
    http_response_code(403);
    echo 'Forbidden';
}
