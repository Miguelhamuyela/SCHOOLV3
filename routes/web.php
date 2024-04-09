<?php

use Illuminate\Support\Facades\Route;


/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {

    route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);


    Route::middleware(['Administrador'])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware('Administrador');
        Route::get('admin/user/activity/{id}', ['as' => 'admin.user.activity', 'uses' => 'Admin\UserController@activity'])->withoutMiddleware('Administrador');

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware('Administrador');
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware('Administrador');

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */


        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);
        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */
        /**maquinaVertual */
        Route::get('admin/maquinaVertual/list', ['as' => 'admin.virtual_machines.index', 'uses' => 'Admin\virtualMachineController@index']);
        Route::get('admin/maquinaVertual/create', ['as' => 'admin.virtual_machines.create', 'uses' => 'Admin\virtualMachineController@create']);
        Route::post('admin/maquinaVertual/store', ['as' => 'admin.virtual_machines.store', 'uses' => 'Admin\virtualMachineController@store']);
        Route::get('admin/maquinaVertual/edit/{id}', ['as' => 'admin.virtual_machines.edit.index', 'uses' => 'Admin\virtualMachineController@edit']);
        Route::put('admin/maquinaVertual/update/{id}', ['as' => 'admin.virtual_machines.update', 'uses' => 'Admin\virtualMachineController@update']);
        Route::get('admin/maquinaVertual/delete/{id}', ['as' => 'admin.virtual_machines.delete', 'uses' => 'Admin\virtualMachineController@destroy']);
        Route::get('admin/maquinaVertual/show/{id}', ['as' => 'admin.virtual_machines.show', 'uses' => 'Admin\virtualMachineController@show']);
        /*  Route::get('admin/funcionários/cartão/{id}', ['as' => 'admin.employees.card', 'uses' => 'Admin\EmployeeController@card']);
         Route::get('admin/funcionários/GetSubCatAgainstMainCatEdit/{id}', ['as' => 'admin.employees', 'uses' => 'Admin\EmployeeController@GetSubCatAgainstMainCatEdit']);
       */
        /**maquinaFisica */
        Route::get('admin/maquinaFisica/list', ['as' => 'admin.fisic_machines.index', 'uses' => 'Admin\fisicMachineController@index']);
        Route::get('admin/maquinaFisica/create', ['as' => 'admin.fisic_machines.create', 'uses' => 'Admin\fisicMachineController@create']);
        Route::post('admin/maquinaFisica/store', ['as' => 'admin.fisic_machines.store', 'uses' => 'Admin\fisicMachineController@store']);
        Route::get('admin/maquinaFisica/edit/{id}', ['as' => 'admin.fisic_machines.edit.index', 'uses' => 'Admin\fisicMachineController@edit']);
        Route::put('admin/maquinaFisica/update/{id}', ['as' => 'admin.fisic_machines.update', 'uses' => 'Admin\fisicMachineController@update']);
        Route::get('admin/maquinaFisica/delete/{id}', ['as' => 'admin.fisic_machines.delete', 'uses' => 'Admin\fisicMachineController@destroy']);
        Route::get('admin/maquinaFisica/show/{id}', ['as' => 'admin.fisic_machines.show', 'uses' => 'Admin\fisicMachineController@show']);
        /*  Route::get('admin/funcionários/cartão/{id}', ['as' => 'admin.employees.card', 'uses' => 'Admin\EmployeeController@card']);
        Route::get('admin/funcionários/GetSubCatAgainstMainCatEdit/{id}', ['as' => 'admin.employees', 'uses' => 'Admin\EmployeeController@GetSubCatAgainstMainCatEdit']);
        */
        /**funcionários */
        Route::get('admin/funcionários/list', ['as' => 'admin.employees.index', 'uses' => 'Admin\EmployeeController@index']);
        Route::get('admin/funcionários/create', ['as' => 'admin.employees.create', 'uses' => 'Admin\EmployeeController@create']);
        Route::post('admin/funcionários/store', ['as' => 'admin.employees.store', 'uses' => 'Admin\EmployeeController@store']);
        Route::get('admin/funcionários/edit/{id}', ['as' => 'admin.employees.edit.index', 'uses' => 'Admin\EmployeeController@edit']);
        Route::put('admin/funcionários/update/{id}', ['as' => 'admin.employees.update', 'uses' => 'Admin\EmployeeController@update']);
        Route::get('admin/funcionários/delete/{id}', ['as' => 'admin.employees.delete', 'uses' => 'Admin\EmployeeController@destroy']);
        Route::get('admin/funcionários/show/{id}', ['as' => 'admin.employees.show', 'uses' => 'Admin\EmployeeController@show']);
        /*  Route::get('admin/funcionários/cartão/{id}', ['as' => 'admin.employees.card', 'uses' => 'Admin\EmployeeController@card']);
         Route::get('admin/funcionários/GetSubCatAgainstMainCatEdit/{id}', ['as' => 'admin.employees', 'uses' => 'Admin\EmployeeController@GetSubCatAgainstMainCatEdit']);
       */
        /**End funcionários */
        /**funcionários */
        Route::get('admin/backups/list', ['as' => 'admin.backups.index', 'uses' => 'Admin\BackupController@index']);
        Route::get('admin/backups/create', ['as' => 'admin.backups.create', 'uses' => 'Admin\BackupController@create']);
        Route::post('admin/backups/store', ['as' => 'admin.backups.store', 'uses' => 'Admin\BackupController@store']);
        Route::get('admin/backups/edit/{id}', ['as' => 'admin.backups.edit.index', 'uses' => 'Admin\BackupController@edit']);
        Route::put('admin/backups/update/{id}', ['as' => 'admin.backups.update', 'uses' => 'Admin\BackupController@update']);
        Route::get('admin/backups/delete/{id}', ['as' => 'admin.backups.delete', 'uses' => 'Admin\BackupController@destroy']);
        Route::get('admin/backups/show/{id}', ['as' => 'admin.backups.show', 'uses' => 'Admin\BackupController@show']);
        /*  Route::get('admin/funcionários/cartão/{id}', ['as' => 'admin.employees.card', 'uses' => 'Admin\EmployeeController@card']);
        Route::get('admin/funcionários/GetSubCatAgainstMainCatEdit/{id}', ['as' => 'admin.employees', 'uses' => 'Admin\EmployeeController@GetSubCatAgainstMainCatEdit']);
        */
        /**End funcionários */

        /**solicitacao */
        Route::get('admin/solicitacao/list', ['as' => 'admin.solicitions.index', 'uses' => 'Admin\SolicitionController@index']);
        Route::get('admin/solicitacao/create', ['as' => 'admin.solicitions.create', 'uses' => 'Admin\SolicitionController@create']);
        Route::post('admin/solicitacao/store', ['as' => 'admin.solicitions.store', 'uses' => 'Admin\SolicitionController@store']);
        Route::get('admin/solicitacao/edit/{id}', ['as' => 'admin.solicitions.edit.index', 'uses' => 'Admin\SolicitionController@edit']);
        Route::put('admin/solicitacao/update/{id}', ['as' => 'admin.solicitions.update', 'uses' => 'Admin\SolicitionController@update']);
        Route::get('admin/solicitacao/delete/{id}', ['as' => 'admin.solicitions.delete', 'uses' => 'Admin\SolicitionController@destroy']);
        Route::get('admin/solicitacao/show/{id}', ['as' => 'admin.solicitions.show', 'uses' => 'Admin\SolicitionController@show']);
        /*  Route::get('admin/funcionários/cartão/{id}', ['as' => 'admin.employees.card', 'uses' => 'Admin\EmployeeController@card']);
  Route::get('admin/funcionários/GetSubCatAgainstMainCatEdit/{id}', ['as' => 'admin.employees', 'uses' => 'Admin\EmployeeController@GetSubCatAgainstMainCatEdit']);
*/
        /**End solicitacao */
    });

    Route::middleware(['ManagerFinancial'])->group(function () {
        /**Statistic */

        Route::get('admin/estatísticas-Geral/list', ['as' => 'admin.generalStatistics.index', 'uses' => 'Admin\GeneralStatisticController@index']);
        Route::get('admin/estatísticas-por-seccao/list', ['as' => 'admin.statisticsSection.index', 'uses' => 'Admin\StatisticController@index']);
        Route::get('admin/estatísticas-por-seccao/list-2', ['as' => 'admin.statisticsSection1.index', 'uses' => 'Admin\StatisticController@statistic']);
        Route::get('admin/estatísticas-por-seccao/list-3', ['as' => 'admin.statisticsSection2.index', 'uses' => 'Admin\StatisticController@statistic3']);


        Route::post('admin/estatísticas-ano/list', ['as' => 'admin.StatistiYerar.store', 'uses' => 'Admin\StatistiYerar@store']);
        Route::get('admin/estatísticas-por-ano/{id}', ['as' => 'admin.StatistiYerar.show', 'uses' => 'Admin\StatistiYerar@show']);
        Route::get('admin/estatísticas-por-seccao/list-2', ['as' => 'admin.statisticsSection1.index', 'uses' => 'Admin\StatisticController@statistic']);
        Route::get('admin/estatísticas-por-seccao/list-3', ['as' => 'admin.statisticsSection2.index', 'uses' => 'Admin\StatisticController@statistic3']);
        /**End Statistic */

        /**Payments*/
        Route::get('admin/pagamentos/list', ['as' => 'admin.payments.index', 'uses' => 'Admin\PaymentsController@index']);
        Route::get('admin/pagamentos/show/{id}', ['as' => 'admin.payments.show', 'uses' => 'Admin\PaymentsController@show']);
        Route::get('admin/pagamentos/relatorios', ['as' => 'admin.payments.report', 'uses' => 'Admin\PaymentsController@printPayment']);

        /* fatura de Pagamento de Serviço */
        Route::get('admin/pagamentos/fatura/{code}/{service}/{value}/{client}/{status}/{nif}/{lastUpdate}', ['as' => 'admin.payments.invoice', 'uses' => 'Admin\InvoiceController@index']);
        /**End Payments*/

        /** Clients */
        Route::get('admin/client/index', ['as' => 'admin.client.create.index', 'uses' => 'Admin\ClientsController@create']);
        Route::get('admin/client/list', ['as' => 'admin.client.list.index', 'uses' => 'Admin\ClientsController@index']);
        Route::post('admin/client/store', ['as' => 'admin.client.store', 'uses' => 'Admin\ClientsController@store']);
        Route::get('admin/client/show/{id}', ['as' => 'admin.client.show', 'uses' => 'Admin\ClientsController@show']);
        Route::get('admin/client/edit/{id}', ['as' => 'admin.client.edit.index', 'uses' => 'Admin\ClientsController@edit']);
        Route::get('admin/client/delete/{id}', ['as' => 'admin.client.delete', 'uses' => 'Admin\ClientsController@destroy']);
        Route::put('admin/client/update/{id}', ['as' => 'admin.client.update', 'uses' => 'Admin\ClientsController@update']);

        //Relatórios PDF
        Route::get('admin/clients/relatorios', ['as' => 'admin.clients.report', 'uses' => 'Admin\ClientsController@printClient']);
        /**End Clients */
        
        /** Clients */
        Route::get('admin/customers/index', ['as' => 'admin.customers.create.index', 'uses' => 'Admin\CustomerController@create']);
        Route::get('admin/customers/list', ['as' => 'admin.customers.list.index', 'uses' => 'Admin\CustomerController@index']);
        Route::post('admin/customers/store', ['as' => 'admin.customers.store', 'uses' => 'Admin\CustomerController@store']);
        Route::get('admin/customers/show/{id}', ['as' => 'admin.customers.show', 'uses' => 'Admin\CustomerController@show']);
        Route::get('admin/customers/edit/{id}', ['as' => 'admin.customers.edit.index', 'uses' => 'Admin\CustomerController@edit']);
        Route::get('admin/customers/delete/{id}', ['as' => 'admin.customers.delete', 'uses' => 'Admin\CustomerController@destroy']);
        Route::put('admin/customers/update/{id}', ['as' => 'admin.customers.update', 'uses' => 'Admin\CustomerController@update']);

        //Relatórios PDF
        Route::get('admin/customers/relatorios', ['as' => 'admin.customers.report', 'uses' => 'Admin\CustomerController@printClient']);
        /**End Clients */
        /**maquina que faz beckup  */
        Route::get('admin/hacks/index', ['as' => 'admin.hacks.create.index', 'uses' => 'Admin\HackController@create']);
        Route::get('admin/hacks/list', ['as' => 'admin.hacks.list.index', 'uses' => 'Admin\HackController@index']);
        Route::post('admin/hacks/store', ['as' => 'admin.hacks.store', 'uses' => 'Admin\HackController@store']);
        Route::get('admin/hacks/show/{id}', ['as' => 'admin.hacks.show', 'uses' => 'Admin\HackController@show']);
        Route::get('admin/hacks/delete/{id}', ['as' => 'admin.hacks.delete', 'uses' => 'Admin\HackController@destroy']);
        Route::put('admin/hacks/update/{id}', ['as' => 'admin.hacks.update', 'uses' => 'Admin\HackController@update']);
        Route::get('admin/hacks/edit/{id}', ['as' => 'admin.hacks.edit.index', 'uses' => 'Admin\HackController@edit']);
        /**End maquina que faz beckup  */
        /**physical_machines  */
        Route::get('admin/physical_machines/index', ['as' => 'admin.physical_machines.create.index', 'uses' => 'Admin\PhysicalMachineController@create']);
        Route::get('admin/physical_machines/list', ['as' => 'admin.physical_machines.list.index', 'uses' => 'Admin\PhysicalMachineController@index']);
        Route::post('admin/physical_machines/store', ['as' => 'admin.physical_machines.store', 'uses' => 'Admin\PhysicalMachineController@store']);
        Route::get('admin/physical_machines/show/{id}', ['as' => 'admin.physical_machines.show', 'uses' => 'Admin\PhysicalMachineController@show']);
        Route::get('admin/physical_machines/delete/{id}', ['as' => 'admin.physical_machines.delete', 'uses' => 'Admin\PhysicalMachineController@destroy']);
        Route::put('admin/physical_machines/update/{id}', ['as' => 'admin.physical_machines.update', 'uses' => 'Admin\PhysicalMachineController@update']);
        Route::get('admin/physical_machines/edit/{id}', ['as' => 'admin.physical_machines.edit.index', 'uses' => 'Admin\PhysicalMachineController@edit']);
        /**End  que faz physical_machines  */
        /**maquina que faz beckup  */
        Route::get('admin/veeamBackups/index', ['as' => 'admin.veeam_backups.create.index', 'uses' => 'Admin\veeamBackupController@create']);
        Route::get('admin/veeamBackups/list', ['as' => 'admin.veeam_backups.list.index', 'uses' => 'Admin\veeamBackupController@index']);
        Route::post('admin/veeamBackups/store', ['as' => 'admin.veeam_backups.store', 'uses' => 'Admin\veeamBackupController@store']);
        Route::get('admin/veeamBackups/show/{id}', ['as' => 'admin.veeam_backups.show', 'uses' => 'Admin\veeamBackupController@show']);
        Route::get('admin/veeamBackups/delete/{id}', ['as' => 'admin.veeam_backups.delete', 'uses' => 'Admin\veeamBackupController@destroy']);
        Route::put('admin/veeamBackups/update/{id}', ['as' => 'admin.veeam_backups.update', 'uses' => 'Admin\veeamBackupController@update']);
        Route::get('admin/veeamBackups/edit/{id}', ['as' => 'admin.veeam_backups.edit.index', 'uses' => 'Admin\veeamBackupController@edit']);
        /**End maquina que faz beckup  */

        /**Startups */
        Route::get('admin/startup/index', ['as' => 'admin.startup.create.index', 'uses' => 'Admin\StartupsController@create']);
        Route::get('admin/startup/list', ['as' => 'admin.startup.list.index', 'uses' => 'Admin\StartupsController@index']);
        Route::post('admin/startup/store', ['as' => 'admin.startup.store', 'uses' => 'Admin\StartupsController@store']);
        Route::get('admin/startup/edit/{id}', ['as' => 'admin.startup.edit.index', 'uses' => 'Admin\StartupsController@edit']);
        Route::put('admin/startup/update/{id}', ['as' => 'admin.startup.update', 'uses' => 'Admin\StartupsController@update']);
        Route::get('admin/startup/delete/{id}', ['as' => 'admin.startup.delete', 'uses' => 'Admin\StartupsController@destroy']);
        Route::get('admin/startup/show/{id}', ['as' => 'admin.startup.show', 'uses' => 'Admin\StartupsController@show']);
        Route::get('admin/startup/print/{id}', ['as' => 'admin.startup.print', 'uses' => 'Admin\StartupsController@print']);
        /**End Startups */


        /**Cowork */
        Route::get('admin/cowork/index', ['as' => 'admin.coworks.create.index', 'uses' => 'Admin\CoworkController@create']);
        Route::get('admin/cowork/list', ['as' => 'admin.coworks.list.index', 'uses' => 'Admin\CoworkController@index']);
        Route::post('admin/cowork/store', ['as' => 'admin.coworks.store', 'uses' => 'Admin\CoworkController@store']);
        Route::get('admin/cowork/show/{id}', ['as' => 'admin.coworks.show', 'uses' => 'Admin\CoworkController@show']);
        Route::get('admin/cowork/delete/{id}', ['as' => 'admin.coworks.delete', 'uses' => 'Admin\CoworkController@destroy']);
        Route::put('admin/cowork/update/{id}', ['as' => 'admin.coworks.update', 'uses' => 'Admin\CoworkController@update']);
        Route::get('admin/cowork/edit/{id}', ['as' => 'admin.coworks.edit.index', 'uses' => 'Admin\CoworkController@edit']);

        /**End Cowork */

        /**Member Cowork*/
        Route::get('admin/memberCowork/print/{id}', ['as' => 'admin.memberCowork.print', 'uses' => 'Admin\CoworksMemberController@print']);
        Route::get('admin/memberCowork/qrcode/{id}', ['as' => 'admin.memberCowork.qrcode', 'uses' => 'Admin\CoworksMemberController@qrcode']);
        Route::get('admin/memberCowork/create/{id}', ['as' => 'admin.memberCowork.create', 'uses' => 'Admin\CoworksMemberController@create']);
        Route::post('admin/memberCowork/store/{id}', ['as' => 'admin.memberCowork.store', 'uses' => 'Admin\CoworksMemberController@store']);
        Route::get('admin/memberCowork/delete/{id}', ['as' => 'admin.memberCowork.delete', 'uses' => 'Admin\CoworksMemberController@destroy']);
        /**End Member Cowork */


        /**Elernings */
        Route::get('admin/elernings/index', ['as' => 'admin.elernings.create.index', 'uses' => 'Admin\ElearningsController@create']);
        Route::get('admin/elernings/list', ['as' => 'admin.elernings.list.index', 'uses' => 'Admin\ElearningsController@index']);
        Route::post('admin/elernings/store', ['as' => 'admin.elernings.store', 'uses' => 'Admin\ElearningsController@store']);
        Route::get('admin/elernings/show/{id}', ['as' => 'admin.elernings.show', 'uses' => 'Admin\ElearningsController@show']);
        Route::get('admin/elernings/delete/{id}', ['as' => 'admin.elernings.delete', 'uses' => 'Admin\ElearningsController@destroy']);
        Route::put('admin/elernings/update/{id}', ['as' => 'admin.elernings.update', 'uses' => 'Admin\ElearningsController@update']);
        Route::get('admin/elernings/edit/{id}', ['as' => 'admin.elernings.edit.index', 'uses' => 'Admin\ElearningsController@edit']);
        /**End Elernings */

        /**Auditoriums */
        Route::get('admin/auditoriums/index', ['as' => 'admin.auditoriums.create.index', 'uses' => 'Admin\AuditoriumsController@create']);
        Route::get('admin/auditoriums/list', ['as' => 'admin.auditoriums.list.index', 'uses' => 'Admin\AuditoriumsController@index']);
        Route::post('admin/auditoriums/store', ['as' => 'admin.auditoriums.store', 'uses' => 'Admin\AuditoriumsController@store']);
        Route::get('admin/auditoriums/show/{id}', ['as' => 'admin.auditoriums.show', 'uses' => 'Admin\AuditoriumsController@show']);
        Route::get('admin/auditoriums/delete/{id}', ['as' => 'admin.auditoriums.delete', 'uses' => 'Admin\AuditoriumsController@destroy']);
        Route::put('admin/auditoriums/update/{id}', ['as' => 'admin.auditoriums.update', 'uses' => 'Admin\AuditoriumsController@update']);
        Route::get('admin/auditoriums/edit/{id}', ['as' => 'admin.auditoriums.edit.index', 'uses' => 'Admin\AuditoriumsController@edit']);
        /**End Auditoriums */

        /** Member */
        Route::get('admin/member/print/{id}', ['as' => 'admin.member.print', 'uses' => 'Admin\MembersController@print']);
        Route::get('admin/member/qrcode/{id}', ['as' => 'admin.member.qrcode', 'uses' => 'Admin\MembersController@qrcode']);
        Route::get('admin/member/create/{id}', ['as' => 'admin.member.create', 'uses' => 'Admin\MembersController@create']);
        Route::post('admin/member/store/{id}', ['as' => 'admin.member.store', 'uses' => 'Admin\MembersController@store']);
        Route::get('admin/member/delete/{id}', ['as' => 'admin.member.delete', 'uses' => 'Admin\MembersController@destroy']);
        /**End Member */

        /**MeetingRoom Start */
        Route::get('admin/sala-de-reunião/list', ['as' => 'admin.meetingRoom.list.index', 'uses' => 'Admin\MeetingRoomsController@index']);
        Route::get('admin/sala-de-reunião/create', ['as' => 'admin.meetingRoom.create.index', 'uses' => 'Admin\MeetingRoomsController@create']);
        Route::post('admin/sala-de-reunião/store', ['as' => 'admin.meetingRoom.store', 'uses' => 'Admin\MeetingRoomsController@store']);
        Route::get('admin/sala-de-reunião/edit/{id}', ['as' => 'admin.meetingRoom.edit.index', 'uses' => 'Admin\MeetingRoomsController@edit']);
        Route::put('admin/sala-de-reunião/update/{id}', ['as' => 'admin.meetingRoom.update', 'uses' => 'Admin\MeetingRoomsController@update']);
        Route::get('admin/sala-de-reunião/delete/{id}', ['as' => 'admin.meetingRoom.delete', 'uses' => 'Admin\MeetingRoomsController@destroy']);
        Route::get('admin/sala-de-reunião/show/{id}', ['as' => 'admin.meetingRoom.show', 'uses' => 'Admin\MeetingRoomsController@show']);
        /**MeetingRoom End */
    });

    Route::middleware(['RepEqui'])->group(function () {
        /**equipmentRepair */
        Route::get('admin/reparação-equipamentos/create', ['as' => 'admin.equipmentRepair.create.index', 'uses' => 'Admin\EquipmentRepairsController@create']);
        Route::get('admin/reparação-equipamentos/list', ['as' => 'admin.equipmentRepair.list.index', 'uses' => 'Admin\EquipmentRepairsController@index']);
        Route::post('admin/reparação-equipamentos/store', ['as' => 'admin.equipmentRepair.store', 'uses' => 'Admin\EquipmentRepairsController@store']);
        Route::get('admin/reparação-equipamentos/show/{id}', ['as' => 'admin.equipmentRepair.show', 'uses' => 'Admin\EquipmentRepairsController@show']);
        Route::get('admin/reparação-equipamentos/delete/{id}', ['as' => 'admin.equipmentRepair.delete', 'uses' => 'Admin\EquipmentRepairsController@destroy']);
        Route::put('admin/reparação-equipamentos/update/{id}', ['as' => 'admin.equipmentRepair.update', 'uses' => 'Admin\EquipmentRepairsController@update']);
        Route::get('admin/reparação-equipamentos/edit/{id}', ['as' => 'admin.equipmentRepair.edit.index', 'uses' => 'Admin\EquipmentRepairsController@edit']);
        /**End equipmentRepair */
    });


    Route::middleware(['FabSoft'])->group(function () {
        /**
         *  ManufacturesSoftwares
         */
        Route::get('admin/manufactures/create', ['as' => 'admin.manufactures.create', 'uses' => 'Admin\ManufacturesSoftwaresController@create']);
        Route::post('admin/manufactures/store', ['as' => 'admin.manufactures.store', 'uses' => 'Admin\ManufacturesSoftwaresController@store']);
        Route::get('admin/manufactures/delete/{id}', ['as' => 'admin.manufactures.delete', 'uses' => 'Admin\ManufacturesSoftwaresController@destroy']);
        Route::put('admin/manufactures/update/{id}', ['as' => 'admin.manufactures.update', 'uses' => 'Admin\ManufacturesSoftwaresController@update']);
        Route::get('admin/manufactures/edit/{id}', ['as' => 'admin.manufactures.edit', 'uses' => 'Admin\ManufacturesSoftwaresController@edit']);
        Route::get('admin/manufactures/show/{id}', ['as' => 'admin.manufactures.show', 'uses' => 'Admin\ManufacturesSoftwaresController@show']);
        Route::get('admin/manufactures/list', ['as' => 'admin.manufactures.list', 'uses' => 'Admin\ManufacturesSoftwaresController@index']);
        /**End ManufacturesSoftware */
    });
});


/* QRCODE find, startup & cowork */
Route::get('membro/startup/{id}', ['as' => 'admin.member.qrfind', 'uses' => 'Admin\MembersController@qrfind']);
Route::get('membro/cowork/{id}', ['as' => 'admin.member.cowork', 'uses' => 'Admin\CoworksMemberController@qrfind']);

/* Invoice Payment */
Route::get('fatura/{code}/{service}/{value}/{client}/{status}/{nif}', ['as' => 'admin.payments.validate', 'uses' => 'Admin\InvoiceController@qrscan']);
/**End  */


/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';
