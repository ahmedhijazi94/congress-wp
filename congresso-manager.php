<?php
/**
 * Plugin Name: Congresso Manager
 * Plugin URI: https://hijaziia.com.br/congresso-manager
 * Description: Plugin para gerenciamento de congressos com funcionalidades de inscrição, pagamento, check-in e gerenciamento de participantes.
 * Version: 1.0.0
 * Author: Ahmed Hijazi
 * Author URI: https://hijaziia.com.br
 * Text Domain: congresso-manager
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit; // Evita o acesso direto ao arquivo
}

// Definir constantes
define('CONGRESSO_MANAGER_VERSION', '1.0.0');
define('CONGRESSO_MANAGER_PATH', plugin_dir_path(__FILE__));
define('CONGRESSO_MANAGER_URL', plugin_dir_url(__FILE__));
define('CONGRESSO_MANAGER_BASENAME', plugin_basename(__FILE__));

// Autoload das classes usando Composer (passo opcional, mas recomendado)
if (file_exists(CONGRESSO_MANAGER_PATH . 'vendor/autoload.php')) {
    require_once CONGRESSO_MANAGER_PATH . 'vendor/autoload.php';
}

// Incluir arquivos essenciais
require_once CONGRESSO_MANAGER_PATH . 'includes/includes.php';

// Inicializar o plugin
function run_congresso_manager() {
    $plugin = \CongressoManager\Core\Congresso_Manager::get_instance();
    $plugin->run();
}
run_congresso_manager();
