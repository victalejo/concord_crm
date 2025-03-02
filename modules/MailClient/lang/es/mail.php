<?php
/**
 * Concord CRM - https://www.concordcrm.com
 *
 * @version   1.5.1
 *
 * @link      Releases - https://www.concordcrm.com/releases
 * @link      Terms Of Service - https://www.concordcrm.com/terms
 *
 * @copyright Copyright (c) 2022-2024 KONKORD DIGITAL
 */

return [
    'compose' => 'Componer',
    'attachments' => 'Archivos adjuntos',
    'emails' => 'Correos electrónicos',
    'create' => 'Crear correo electrónico',
    'send' => 'Enviar correo electrónico',
    'from_header' => 'Desde el encabezado',
    'from_name' => 'Desde el nombre',
    'signature' => 'Firma de correo electrónico',
    'signature_info' => 'Cree una firma que se agregará al final de sus mensajes.',
    'show_quoted_content' => 'Mostrar contenido citado',
    'trimmed_content' => 'Contenido recortado',
    'disable_sync' => 'Deshabilitar sincronización',
    'manage_emails' => 'Administrar correos electrónicos',
    'info' => 'Puede enviar y responder correos electrónicos directamente a través de esta sección.',
    'from_header_info' => 'Lo que las personas verán en la "dirección de remitente" cuando reciban un correo electrónico de esta dirección de correo electrónico.',
    'placeholders_info' => 'Use marcadores de posición :placeholders para reemplazar dinámicamente el contenido, como el nombre de la empresa, el nombre del agente (usuario que envía el correo electrónico).',
    'mark_as_read' => 'Marcar como leído',
    'mark_as_unread' => 'Marcar como no leído',
    'message_queued_for_sending' => 'El mensaje se ha puesto en cola para su envío, se sincronizará en el siguiente grupo de sincronización.',
    'initial_sync_info' => 'Esta cuenta está en cola para la sincronización inicial y se realizará tan pronto como se ejecute la tarea programada. Para evitar interrupciones, asegúrese de haber configurado la tarea como se explica en la documentación.',
    'message' => 'Mensaje de correo',
    'messages' => 'Mensajes de correo',
    'account' => [
        'create_contact' => 'Crear registro de contacto si el registro no existe.',
        'personal' => 'Personal',
        'shared' => 'Compartido',
        'accounts' => 'Cuentas de correo electrónico',
        'sync_emails_from' => 'Sincronizar correos electrónicos de',
        'sync_period_now' => 'Ahora',
        'sync_period_1_month_ago' => 'hace 1 mes',
        'sync_period_3_months_ago' => 'hace 3 meses',
        'sync_period_6_months_ago' => 'hace 6 meses',
        'sync_period_note' => 'En la mayoría de los casos no necesitará ni interactuará con todos los correos electrónicos de :date, un periodo de sincronización inicial más bajo evitará la importación de cientos de correos electrónicos con archivos adjuntos y ayudará a ahorrar espacio de almacenamiento, por lo que siempre se recomienda elegir un periodo de sincronización inicial más bajo.',
        'integration_not_configured' => 'No hay cuentas de correo electrónico configuradas, configure cuentas de correo personales o compartidas para poder enviar correos electrónicos.',
        'already_connected' => 'Esta cuenta de correo electrónico ya está conectada.',
        'select_type' => 'Seleccione el tipo de cuenta',
        'no_active_folders' => 'Esta cuenta no tiene carpetas activas. Habilite las carpetas editando la cuenta de correo, las carpetas activas serán las que se sincronizarán con la aplicación.',
        'activate_folders' => 'Activar carpetas',
        'active_folders' => 'Carpetas activas',
        'sent_folder' => 'Carpeta de enviados',
        'trash_folder' => 'Carpeta de papelera',
        'test_connection' => 'Probar conexión',
        'is_primary' => 'Cuenta principal',
        'connection_error' => 'Error de prueba de conexión, verifique su configuración, consulte el error para obtener más información: :message',
        'create' => 'Crear cuenta de correo electrónico',
        'edit' => 'Editar cuenta de correo electrónico',
        'manage' => 'Administrar cuentas',
        'connect' => 'Conectar cuenta',
        'connect_shared' => 'Conectar cuenta compartida',
        'connect_personal' => 'Conectar cuenta personal',
        'created' => 'Cuenta de correo electrónico añadida correctamente.',
        'updated' => 'Cuenta de correo electrónico actualizada correctamente.',
        'deleted' => 'Cuenta de correo electrónico eliminada correctamente',
        'no_accounts_configured' => 'No hay cuentas de correo electrónico configuradas',
        'no_accounts_configured_info' => 'Conecte una cuenta para empezar a enviar y organizar correos electrónicos con el fin de cerrar acuerdos más rápidamente',
        'create_shared_info' => 'Conecte una cuenta de correo electrónico de la empresa, como contact@company.com o sales@company.com',
        'create_shared_confirmation_message' => 'Cuando conecte una cuenta de correo electrónico compartida, tenga en cuenta que todos los miembros del equipo a los que se les ha otorgado "acceso a la bandeja de entrada compartida" pueden acceder a las cuentas de correo electrónico compartidas. <br /> <br />
        Esto significa que cada miembro del equipo podrá ver e interactuar con los correos.',
        'type' => 'Tipo de cuenta',
        'email_address' => 'Dirección de correo electrónico',
        'password' => 'Contraseña',
        'username' => 'Nombre de usuario',
        'incoming_mail' => 'Correo entrante (IMAP)',
        'outgoing_mail' => 'Correo saliente (SMTP)',
        'server' => 'Servidor',
        'port' => 'Puerto',
        'allow_non_secure_certificate' => 'Permitir certificado no seguro',
        'encryption' => 'Cifrado',
        'without_encryption' => 'Sin cifrado',
        'delete_warning' => 'Si está utilizando esta cuenta de correo electrónico como "Cuenta de correo electrónico del sistema" en la configuración, deberá seleccionar otra cuenta para enviar correos electrónicos relacionados con el sistema; además, deberá verificar sus flujos de trabajo, si algún flujo está configurado para usar "Enviar correo electrónico" con esta cuenta de correo electrónico en particular, deberá actualizar la cuenta de correo de acción para que el flujo de trabajo continúe enviando correos.',
        'featured' => [
            'sync' => 'Sincronización bidireccional de correo electrónico con su proveedor de correo electrónico.',
            'save_time' => 'Ahorre tiempo haciendo uso de plantillas predefinidas.',
            'placeholders' => 'Redacte correos electrónicos y plantillas con marcadores de posición.',
            'signature' => 'Agregue una firma personalizada para una apariencia más profesional.',
            'associations' => 'Asocia correos electrónicos a muchos :resources y :resource.',
            'types' => 'Conéctese a través de IMAP, su cuenta de Gmail o Outlook.',
        ],
    ],
    'templates' => [
        'select' => 'Sleccionar',
        'create' => 'Crear plantilla',
        'name' => 'Nombre',
        'subject' => 'Asunto',
        'is_shared' => '¿Compartir esta plantilla con otros miembros del equipo?',
        'body' => 'Cuerpo',
        'templates' => 'Plantillas',
        'created' => 'Plantilla de correo creada con éxito.',
        'updated' => 'Plantilla de correo actualizada con éxito.',
        'deleted' => 'Plantilla de correo eliminada con éxito.',
    ],
    'labels' => [
        'CATEGORY_PERSONAL' => 'Personal',
        'CATEGORY_SOCIAL' => 'Social',
        'CATEGORY_FORUMS' => 'Foros',
        'IMPORTANT' => 'Importante',
        'CATEGORY_UPDATES' => 'Actualizaciones',
        'CATEGORY_PROMOTIONS' => 'Promociones',
        'CHAT' => 'Chat',
        'SENT' => 'Enviado',
        'INBOX' => 'Bandeja',
        'TRASH' => 'Papelera',
        'DRAFT' => 'Borrador',
        'DRAFTS' => 'BORRADORES',
        'SPAM' => 'Spam',
        'STARRED' => 'Destacado',
        'UNREAD' => 'Sin leer',
    ],
    'workflows' => [
        'actions' => [
            'send' => 'Enviar correo electrónico',
        ],
        'fields' => [
            'from_account' => 'Desde la cuenta de correo electrónico',
            'subject' => 'Con asunto',
            'message' => 'Con mensaje',
            'to' => 'Para',
        ],
    ],
    'validation' => [
        'invalid_recipients' => 'Parece que algunos de sus destinatarios tienen una dirección no válida.',
    ],
];
