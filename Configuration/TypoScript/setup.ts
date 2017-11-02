
plugin.tx_realer_objectlisting {
    view {
        templateRootPaths.0 = EXT:realer/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_realer_objectlisting.view.templateRootPath}
        partialRootPaths.0 = EXT:realer/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_realer_objectlisting.view.partialRootPath}
        layoutRootPaths.0 = EXT:realer/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_realer_objectlisting.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_realer_objectlisting.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}


## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder


plugin.tx_realer_objectlisting {
	settings {
			image.maxWidth = {$plugin.tx_realer_objectlisting.settings.image.maxWidth}
			text.maxCharacters = {$plugin.tx_realer_objectlisting.settings.text.maxCharacters}
			propertyCountPerPage = {$plugin.tx_realer_objectlisting.settings.propertyCountPerPage}
			mapUri = {$plugin.tx_realer_objectlisting.settings.mapUri}
	}
}