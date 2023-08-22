<?php
/*
Plugin Name: Meu Plugin
Description: Plugin de exemplo para WordPress
*/

// Adicione um botão personalizado ao editor
function adicionar_botao_personalizado() {
    add_action('media_buttons', 'inserir_botao_modal', 11);
}

function inserir_botao_modal() {
    echo '<a href="#" id="abrir-modal" class="button">Abrir Modal</a>';
}

add_action('admin_head', 'adicionar_botao_personalizado');

// Adicione scripts e estilos necessários
function adicionar_scripts_estilos() {
    wp_enqueue_script('jquery');
    
    wp_enqueue_script
wp_enqueue_script('meu-plugin', plugin_dir_url(__FILE__) . 'meu-plugin.js', array('jquery'), '1.0', true);
    wp_enqueue_style('meu-plugin-estilos', plugin_dir_url(__FILE__) . 'meu-plugin.css');
}

add_action('admin_enqueue_scripts', 'adicionar_scripts_estilos');

// Código JavaScript para manipular o modal
function adicionar_codigo_js() {
    echo '<script>
        jQuery(document).ready(function($) {
            $("#abrir-modal").click(function() {
                var modalConteudo = "<div id=\'modal\'><textarea id=\'texto-modal\'>Conteúdo editável do modal.</textarea><button id=\'fechar-modal\'>Fechar</button></div>";
                $("body").append(modalConteudo);
                $("#modal").fadeIn();
            });

            $(document).on("click", "#fechar-modal", function() {
                $("#modal").fadeOut(function() {
                    $(this).remove();
                });
            });
        });
    </script>';
}


}

add
add_action('admin_footer', 'adicionar_codigo_js');

``
