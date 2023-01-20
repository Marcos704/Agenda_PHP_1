<?php


function criarTabelaContatos($data){
    if(!$data){
        echo '<table id="listView">';
        echo '<tbody>';
            echo '<tr>';
                echo '<td>';
                echo '<span class="contato-descricao">Nenhum registro encontrado!</span>';
                echo '</td>';
            echo '</tr>';
        echo '</tbody>';
    echo '</table>';
    }
    echo '<table id="listView">';
        echo '<tbody>';
        for ($i = 0; $i < count($data); $i++) {
            foreach ($data[$i] as $key => $value) {
            }
            $idContato = $data[$i]['idContato'];
            $nomeContato = $data[$i]['nomeContato'];
            echo '<tr data-id="'.$idContato.'">';
                #echo '<td>';
                    echo '<td><span class="contato-icon">';
                        echo '<span class="contato-letra ">'.$nomeContato[0].'</span>';
                    echo '</span></td>';
                    echo '<td><a href="informacoesContato.php?idContato='.$idContato.'" class="contato-descricao text-wrap">'.$nomeContato.'</a></td>';
                #echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
    echo '</table>';
}

