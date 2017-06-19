<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<form method="POST" action="create">
    <div>
        <label>Nome Completo: </label>
        <input id="nome" type="text" placeholder="Ex: João da Silva" maxlenght="50"/>
    <div>
    <div>
        <label>CPF: </label>
        <input id="cpf" type="text" placeholder="012.345.678-01" maxlenght="15"/>
    <div>
    <div>
        <label>Endereço Completo: </label>
        <input id="endereco" type="text" placeholder="Avenida, Número, Complemento, Bairro" maxlenght="70"/>
    <div>
    <div>
        <label>Cidade: </label>
        <input id="cidade" type="text" placeholder="Cidade" maxlenght="35"/>
        <label>Estado: </label>
        
    <div>
    <div>
        <label>Telefone: </label>
        <input id="telefone" type="text" type="text" placeholder="(55) 99999-9999" maxlenght="15"/>
    <div>
    <div>
        <label>Data de Nascimento: </label>
        <input id="datanasc" type="date" placeholder="01/01/1990" maxlenght="10"/>
    <div>
    <div>
        <label>E-mail: </label>
        <input id="email" type="text" placeholder="email@email.com" maxlenght="50"/>
    <div>
    <div>
        <label>Senha: </label>
        <input id="senha" type="password" placeholder="senha" maxlenght="15"/>
    <div>
    
</form>
