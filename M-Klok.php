<?php
set_time_limit(60);
for ($i = 0; $i < 59; ++$i) {
    echo date("d-m-Y h:i:s\n");
    sleep(10);
}
