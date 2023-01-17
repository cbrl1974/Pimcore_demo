<?php

return [
    "bundle" => [
        "Pimcore\\Bundle\\EcommerceFrameworkBundle\\PimcoreEcommerceFrameworkBundle" => TRUE,
        "CustomerManagementFrameworkBundle\\PimcoreCustomerManagementFrameworkBundle" => TRUE,
        "OutputDataConfigToolkitBundle\\OutputDataConfigToolkitBundle" => TRUE,
        "Web2PrintToolsBundle\\Web2PrintToolsBundle" => TRUE,
        "Pimcore\\Bundle\\DataHubBundle\\PimcoreDataHubBundle" => [
            "enabled" => TRUE,
            "priority" => 20,
            "environments" => [

            ]
        ],
        "Pimcore\\Bundle\\ObjectMergerBundle\\ObjectMergerBundle" => TRUE,
        "Pimcore\\Bundle\\EcommerceFrameworkBundle\\PimcorePaymentProviderPayPalSmartPaymentButtonBundle" => TRUE,
        "Pimcore\\Bundle\\BundleGeneratorBundle\\PimcoreBundleGeneratorBundle" => TRUE,
        "Pimcore\\Bundle\\NumberSequenceGeneratorBundle\\NumberSequenceGeneratorBundle" => TRUE,
        "Pimcore\\Bundle\\DataImporterBundle\\PimcoreDataImporterBundle" => TRUE
    ]
];
