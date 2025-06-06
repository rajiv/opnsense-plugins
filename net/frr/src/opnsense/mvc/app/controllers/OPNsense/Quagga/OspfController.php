<?php

/*
    Copyright (C) 2017 Fabian Franz
    All rights reserved.

    Redistribution and use in source and binary forms, with or without
    modification, are permitted provided that the following conditions are met:

    1. Redistributions of source code must retain the above copyright notice,
       this list of conditions and the following disclaimer.

    2. Redistributions in binary form must reproduce the above copyright
       notice, this list of conditions and the following disclaimer in the
       documentation and/or other materials provided with the distribution.

    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
    POSSIBILITY OF SUCH DAMAGE.
*/

namespace OPNsense\Quagga;

class OspfController extends \OPNsense\Base\IndexController
{
    public function indexAction()
    {
        $this->view->generalForm = $this->getForm("ospf");

        $this->view->formDialogEditOSPFNeighbor = $this->getForm("dialogEditOSPFNeighbor");
        $this->view->formGridEditOSPFNeighbor = $this->getFormGrid("dialogEditOSPFNeighbor");

        $this->view->formDialogEditNetwork = $this->getForm("dialogEditOSPFNetwork");
        $this->view->formGridEditNetwork = $this->getFormGrid("dialogEditOSPFNetwork");

        $this->view->formDialogEditInterface = $this->getForm("dialogEditOSPFInterface");
        $this->view->formGridEditInterface = $this->getFormGrid("dialogEditOSPFInterface");

        $this->view->formDialogEditPrefixLists = $this->getForm("dialogEditOSPFPrefixLists");
        $this->view->formGridEditPrefixLists = $this->getFormGrid("dialogEditOSPFPrefixLists");

        $this->view->formDialogEditRouteMaps = $this->getForm("dialogEditOSPFRouteMaps");
        $this->view->formGridEditRouteMaps = $this->getFormGrid("dialogEditOSPFRouteMaps");

        $this->view->formDialogEditRedistribution = $this->getForm("dialogEditRedistribution");
        $this->view->formGridEditRedistribution = $this->getFormGrid("dialogEditRedistribution");

        $this->view->pick('OPNsense/Quagga/ospf');
    }
}
