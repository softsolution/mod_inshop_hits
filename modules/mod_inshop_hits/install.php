<?php

// ========================================================================== //

    function info_module_mod_inshop_hits(){

        //
        // �������� ������
        //

        //��������� (�� �����)
        $_module['title']        = 'InstantShop: ���� ������';

        //�������� (� �������)
        $_module['name']         = 'InstantShop: ���� ������';

        //��������
        $_module['description']  = '���������� ������ � ������� ��� ������ InstantShop';
        
        //������ (�������������)
        $_module['link']         = 'mod_inshop_hits';
        
        //�������
        $_module['position']     = 'maintop';

        //�����
        $_module['author']       = 'soft-solution.ru';

        //������� ������
        $_module['version']      = '1.0';

        //
        // ��������� ��-���������
        //
        $_module['config'] = array();

        return $_module;

    }

// ========================================================================== //

    function install_module_mod_inshop_hits(){

        return true;

    }

// ========================================================================== //

    function upgrade_module_mod_inshop_hits(){

        return true;
        
    }

// ========================================================================== //

?>