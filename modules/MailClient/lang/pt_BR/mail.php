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
    'compose' => 'Compor',
    'attachments' => 'Anexos',
    'emails' => 'E-mails',
    'create' => 'Criar E-mail',
    'send' => 'Enviar E-mail',
    'view' => 'Ver E-mail',
    'from_header' => 'Cabeçalho De',
    'from_name' => 'Nome De',
    'signature' => 'Assinatura de E-mail',
    'signature_info' => 'Crie uma assinatura que será adicionada ao final de suas mensagens.',
    'show_quoted_content' => 'Mostrar conteúdo citado',
    'trimmed_content' => 'Conteúdo Cortado',
    'disable_sync' => 'Desativar Sincronização',
    'manage_emails' => 'Gerenciar E-mails',
    'info' => 'Você pode enviar e responder e-mails diretamente através desta seção.',
    'from_header_info' => 'O que as pessoas verão no "endereço do remetente" quando receberem um e-mail deste endereço de e-mail.',
    'placeholders_info' => 'Use espaços reservados :placeholders para substituir dinamicamente o conteúdo como nome da empresa, nome do agente (usuário que envia o e-mail).',
    'mark_as_read' => 'Marcar como Lido',
    'mark_as_unread' => 'Marcar como Não Lido',
    'message_queued_for_sending' => 'A mensagem foi colocada na fila para envio e será sincronizada no próximo lote de sincronização.',
    'initial_sync_info' => 'Esta conta está na fila para sincronização inicial e a sincronização será realizada assim que o cron job for executado, para evitar interrupções de sincronização, certifique-se de ter configurado o cron job conforme explicado na documentação.',
    'messages' => 'Mensagens de correio',
    'message' => 'Mensagem de correio',
    'account' => [
        'create_contact' => 'Criar registro de Contato se o registro não existir.',
        'personal' => 'Pessoal',
        'shared' => 'Compartilhada',
        'accounts' => 'Contas de E-mail',
        'sync_emails_from' => 'Sincronizar e-mails de',
        'sync_period_now' => 'Agora',
        'sync_period_1_month_ago' => '1 mês atrás',
        'sync_period_3_months_ago' => '3 meses atrás',
        'sync_period_6_months_ago' => '6 meses atrás',
        'sync_period_note' => 'Na maioria dos casos, você não precisará interagir com todos os e-mails de :date, um período de sincronização inicial mais baixo evitará a importação de centenas de e-mails com anexos e ajudará a economizar espaço de armazenamento. Sempre é recomendável escolher um período de sincronização inicial mais baixo.',
        'integration_not_configured' => 'Não há contas de e-mail configuradas, configure contas de e-mail pessoais ou compartilhadas para enviar e-mails.',
        'already_connected' => 'Esta conta de e-mail já está conectada.',
        'select_type' => 'Selecione o tipo de conta',
        'no_active_folders' => 'Esta conta não tem pastas ativas. Ative as pastas ativas editando a conta de e-mail, as pastas ativas serão as pastas que serão sincronizadas com o aplicativo.',
        'activate_folders' => 'Ativar Pastas',
        'active_folders' => 'Pastas ativas',
        'sent_folder' => 'Pasta de Enviados',
        'trash_folder' => 'Pasta da Lixeira',
        'test_connection' => 'Testar Conexão',
        'is_primary' => 'Conta Primária',
        'connection_error' => 'Erro de teste de conexão, verifique sua configuração, consulte o erro para obter mais informações: :mensagem',
        'create' => 'Editar conta de e-mail',
        'edit' => 'Editar Conta de E-mail',
        'manage' => 'Gerenciar Contas',
        'connect' => 'Conectar Conta',
        'connect_shared' => 'Conectar Conta Compartilhada',
        'connect_personal' => 'Conectar Conta Pessoal',
        'created' => 'Conta de e-mail adicionada com sucesso.',
        'updated' => 'Conta de e-mail atualizada com sucesso.',
        'deleted' => 'Conta de e-mail excluída com sucesso',
        'no_accounts_configured' => 'Nenhuma conta de e-mail configurada',
        'no_accounts_configured_info' => 'Conecte uma conta para começar a enviar e organizar e-mails para fechar negócios mais rapidamente',
        'create_shared_info' => 'Conecte uma conta de e-mail da empresa, como contato@empresa.com.br ou vendas@empresa.com.br',
        'create_shared_confirmation_message' => 'Ao conectar uma conta de e-mail compartilhada, esteja ciente de que as contas de e-mail compartilhadas podem ser acessadas por todos os membros da equipe que receberam "acesso à caixa de entrada compartilhada".
Isso significa que cada membro da equipe poderá visualizar e interagir com os e-mails.',
        'type' => 'Tipo de Conta',
        'email_address' => 'Endereço de e-mail',
        'password' => 'Senha',
        'username' => 'Nome de usuário',
        'incoming_mail' => 'Recebimento de E-mail (IMAP)',
        'outgoing_mail' => 'Envio de E-mail (SMTP)',
        'server' => 'Servidor',
        'port' => 'Porta',
        'allow_non_secure_certificate' => 'Permitir certificado não seguro',
        'encryption' => 'Criptografia',
        'without_encryption' => 'Sem Criptografia',
        'delete_warning' => 'Se você estiver usando esta conta de e-mail como "Conta de e-mail do sistema" nas configurações, será necessário selecionar outra conta para enviar e-mails relacionados ao sistema, além disso, você precisará verificar seus fluxos de trabalho, se algum fluxo de trabalho estiver configurado para usar a ação "Enviar E-mail" com esta conta de e-mail específica, você precisará atualizar a conta de ação para que o fluxo de trabalho continue enviando e-mails.',
        'featured' => [
            'sync' => 'Sincronização de e-mail bidirecional com seu provedor de e-mail.',
            'save_time' => 'Economize tempo fazendo uso de modelos predefinidos.',
            'placeholders' => 'Componha e-mails e modelos com espaços reservados.',
            'signature' => 'Adicione assinatura personalizada para uma aparência mais profissional.',
            'associations' => 'Associe e-mails a muitos :resources e :resource.',
            'types' => 'Conecte-se via IMAP, sua conta do Gmail ou Outlook.',
        ],
    ],
    'templates' => [
        'select' => 'Selecione',
        'create' => 'Criar Modelo',
        'name' => 'Nome',
        'subject' => 'Assunto',
        'is_shared' => 'Compartilhar este modelo com outros membros da equipe?',
        'body' => 'Corpo',
        'templates' => 'Modelos',
        'created' => 'Modelo de e-mail criado com sucesso.',
        'updated' => 'Modelo de e-mail atualizado com sucesso.',
        'deleted' => 'Modelo de e-mail excluído com sucesso',
    ],
    'labels' => [
        'CATEGORY_PERSONAL' => 'Pessoal',
        'CATEGORY_SOCIAL' => 'Compartilhada',
        'CATEGORY_FORUMS' => 'Fóruns',
        'IMPORTANT' => 'Importante',
        'CATEGORY_UPDATES' => 'Atualizações',
        'CATEGORY_PROMOTIONS' => 'Promoções',
        'CHAT' => 'Chat',
        'SENT' => 'Enviados',
        'INBOX' => 'Inbox',
        'TRASH' => 'Lixeira',
        'DRAFT' => 'Rascunho',
        'DRAFTS' => 'Rascunhos',
        'SPAM' => 'Spam',
        'STARRED' => 'Marcados',
        'UNREAD' => 'Não Lidos',
    ],
    'workflows' => [
        'actions' => [
            'send' => 'Enviar E-mail',
        ],
        'fields' => [
            'from_account' => 'Da conta de e-mail',
            'subject' => 'Com assunto',
            'message' => 'Com mensagem',
            'to' => 'Para',
        ],
    ],
    'validation' => [
        'invalid_recipients' => 'Parece que alguns de seus destinatários têm endereços inválidos.',
    ],
];
