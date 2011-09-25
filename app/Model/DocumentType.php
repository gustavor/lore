<?php
/**
 * Lore - Controle de Contas a Pagar e Receber
 * DocumentType Model
 * Concentra os tipos de documento para referenciamento na base de dados
 * @author Gustavo Ramos
 * @version 1.0.0
 * @since 1.0.0
 */

class DocumentType extends AppModel
{
    /**
     * Model Name
     * @visibility public
     */
    public $name = 'DocumentType';

    /**
     * Name of the database table this model uses
     * @visibility public
     */
    public $useTable = 'document_types';

    /**
     * Field that will be displayed by default
     * @visibility public
     */
    public $displayField = 'description';

    /**
     * Default model Order
     * @visibility public
     */
    public $order = 'DocumentType.due_date DESC';

    /**
     * Validation Rules for this Model
     * @visibility public
     */
    public $validate = array(
        'name' => array(
            'docTypeRule1' => array(
                'rule' => 'notEmpty',
                'message' => 'É necessário informar o nome do Tipo de Documento!'
            ),
            'docTypeRule2' => array(
                'rule' => 'isUnique',
                'message' => 'Já existe um tipo de documento com este nome!'
            )

        )
    );
}