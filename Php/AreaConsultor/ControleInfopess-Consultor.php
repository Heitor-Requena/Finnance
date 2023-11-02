<?php
    session_start();
    include_once "Cls_InfopessConsultor.php";

    $ID_Consultor          = $_SESSION["id"];
    $Nome_Consultor        = filter_input(INPUT_GET, "Nome");
    $Email_Consultor       = filter_input(INPUT_GET, "Email");
    $CPF_Consultor         = filter_input(INPUT_GET, "CPF");
    $RG_Consultor          = filter_input(INPUT_GET, "RG");
    $Data_Nascimento     = filter_input(INPUT_GET, "Nasc");
    $CEP                 = filter_input(INPUT_GET, "CEP");
    $Rua                 = filter_input(INPUT_GET, "Rua");
    $Bairro              = filter_input(INPUT_GET, "Bairro");
    $Numero_Casa         = filter_input(INPUT_GET, "Numero");
    $Complemento_Consultor = filter_input(INPUT_GET, "Complemento");
    $Cidade              = filter_input(INPUT_GET, "Cidade");
    $Estado              = filter_input(INPUT_GET, "Estado");

    $Dados = new Cls_InfopessConsultor();

    $Dados->setID_Consultor($ID_Consultor);
    $Dados->setNomeConsultor($Nome_Consultor);
    $Dados->setEmailConsultor($Email_Consultor);
    $Dados->setCPFConsultor($CPF_Consultor);
    $Dados->setRGConsultor($RG_Consultor);
    $Dados->setDataNasc($Data_Nascimento);
    $Dados->setCEPConsultor($CEP);
    $Dados->setRuaConsultor($Rua);
    $Dados->setBairroConsultor($Bairro);
    $Dados->setNumeroCasaConsultor($Numero_Casa);
    $Dados->setComplementoConsultor($Complemento_Consultor);
    $Dados->setCidadeConsultor($Cidade);
    $Dados->setEstadoConsultor($Estado);


    if(isset($_GET["CarregarDados"])){
        $Retorno = $Dados->CarregarDados();
        echo $Retorno;
    }

    else if(isset($_GET["Salvar"])){
        $Retorno = $Dados->SalvarDados();
        echo $Retorno;
    }
    
?>