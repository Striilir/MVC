<?php

final class ControleurHelloworld
{
    public function defautAction()
    {
        $O_helloworld = new Helloworld();
        Vue::montrer('helloworld/voir', array('helloworld' => $O_helloworld->donneMessage()));

    }

    public function testformAction(array $A_parametres = null, array $A_postParams = null)
    {

        Vue::montrer('helloworld/testform', array('formData' => $A_postParams));

    }
}