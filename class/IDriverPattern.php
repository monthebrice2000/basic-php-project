<?php

interface IDriverPattern
{
    public function connect( $user, $passwd, $dbms );
}