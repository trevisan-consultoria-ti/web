<?php

    require_once('../../config.php');    
    require_once(DBAPI);

    const ENTITIES = 'products';
    const ENTITY ='product';

    $products = null;
    $product = null;

    /**
     *  Listar
     */
    function index() {
        global $products;
        $products = find_all(ENTITIES);
    }

    /**
     *  Adicionar
     */
    function add() {

      if (!empty($_POST[ENTITY])) {

        $today = 
          date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $product = $_POST[ENTITY];
        $product['modified'] = $product['created'] = $today->format("Y-m-d H:i:s");

        save(ENTITIES, $product);
        header('location: index.php');
      }
    }



    /**
     *	Atualizar
     */
    function edit() {

      $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

      if (isset($_GET['id'])) {

        $id = $_GET['id'];

        if (isset($_POST[ENTITY])) {

          $product = $_POST[ENTITY];
          $product['modified'] = $now->format("Y-m-d H:i:s");

          update(ENTITIES, $id, $product);
          header('location: index.php');
        } else {

          global $product;
          $product = find(ENTITIES, $id);
        } 
      } else {
        header('location: index.php');
      }
    }


    /**
     *  Visualizar
     */
    function view($id = null) {
      global $product;
      $product = find(ENTITIES, $id);
    }


    /**
     *  Excluir
     */
    function delete($id = null) {

      global $product;
      $product = remove(ENTITIES, $id);

      header('location: index.php');
    }