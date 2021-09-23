<?php
$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Inicio: Gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //Temrino: Gerente de vendas

                )
            ),
            //Termino: Diretor Comertcial
            //Inicio: Diretor financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Inicio: Gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de contas a pagar',
                        'subordinados' => array(
                            //Inicio Supervisor e pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de pagamentos'
                            )
                            //Termino Supervisor e pagamentos
                        )
                    ),
                    //Termino: Gerente de contas a pagar
                    //Inicio: Gerente de compras
                    array(
                        'nome_cargo' => 'Gerente de compras',
                        'subordinados' => array(
                            //inicio: Supervisor de suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de suprimentos'
                            )
                            //Termino: Supervisor de suprimentos
                        )
                    )
                    //Termino:Gerente de contas
                )
            )


        )
    )
);
function exibe($cargos){
    $html = '<ul>';
        foreach($cargos as $cargo){
            $html .= '<li>';
                $html .= $cargo['nome_cargo'];
                if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                    $html .= exibe($cargo['subordinados']);
                }
            $html .= '</li>';
        }
    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);