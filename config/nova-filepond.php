<?php

return [
    /**
     * All the values will pass through the trans() function
     */

    'labels' => [
        'decimalSeparator' => 'auto',
        'thousandsSeparator' => 'auto',
        'idle' => 'Arrastre y suelte sus archivos o <span class="filepond--label-action"> Seleccione </span>',
        'invalidField' => 'Archivo invalido',
        'fileWaitingForSize' => 'Waiting for size',
        'fileSizeNotAvailable' => 'Size not available',
        'fileLoading' => 'Cargando',
        'fileLoadError' => 'Error durante la carga',
        'fileProcessing' => 'Procesando',
        'fileProcessingComplete' => 'Completado',
        'fileProcessingAborted' => 'Proceso cancelado',
        'fileProcessingError' => 'Error duante la carga',
        'fileProcessingRevertError' => 'Error al revertir proceso',
        'fileRemoveError' => 'Error al remover',
        'tapToCancel' => 'Presione para cancelar',
        'tapToRetry' => 'Presione para reintentar',
        'tapToUndo' => 'Presione para revertir',
        'buttonRemoveItem' => 'Remover',
        'buttonAbortItemLoad' => 'Abortar',
        'buttonRetryItemLoad' => 'Reintentar',
        'buttonAbortItemProcessing' => 'Cancelar',
        'buttonUndoItemProcessing' => 'Revertir',
        'buttonRetryItemProcessing' => 'Reintentar',
        'buttonProcessItem' => 'Subir'
    ],

    'doka' => [

        /**
         * Only enable if you have setup doka.min.js correctly, you can find more details how to obtain these files here: https://pqina.nl/doka/?ref=nova-filepond#pricing
         * Please use the browser version of doka.min.js.js
         */
        'enabled' => false,

        /**
         * Global options, every options contained in here will be merged with every instance of Filepond you create
         */
        'options' => [
            /**
             * Uncomment this to use a circular mask instead of a rectangular one
             */
            //            'cropMask' => <<<JAVASCRIPT
            //                            (root, setInnerHTML) => {
            //                                setInnerHTML(root, `
            //                                    <mask id="circular-mask">
            //                                        <rect x="0" y="0" width="100%" height="100%" fill="white"/>
            //                                        <circle cx="50%" cy="50%" r="50%" fill="black"/>
            //                                    </mask>
            //                                    <rect fill="rgba(255,255,255,.3125)" x="0" y="0" width="100%" height="100%" mask="url(#circular-mask)"/>
            //                                    <circle cx="50%" cy="50%" r="50%" fill="transparent" stroke-width="1" stroke="#fff"/>
            //                                `);
            //                            }
            //                            JAVASCRIPT,
            'cropShowSize' => true,
            'cropAspectRatioOptions' => [
                [
                    'label' => 'Free',
                    'value' => null
                ],
                [
                    'label' => 'Portrait',
                    'value' => 1.25
                ],
                [
                    'label' => 'Square',
                    'value' => 1
                ],
                [
                    'label' => 'Landscape',
                    'value' => .75
                ]
            ]
        ]
    ]
];
