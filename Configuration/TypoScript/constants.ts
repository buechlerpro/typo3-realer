
plugin.tx_realer_propertylisting {
    view {
        # cat=plugin.tx_realer_propertylisting/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:realer/Resources/Private/Templates/
        # cat=plugin.tx_realer_propertylisting/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:realer/Resources/Private/Partials/
        # cat=plugin.tx_realer_propertylisting/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:realer/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_realer_propertylisting//a; type=string; label=Default storage PID
        storagePid =
    }
}


## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

# ---------------------------------------------------------- #
# subcategories
# ---------------------------------------------------------- #
# customsubcategory=realer-110=Template
# customsubcategory=realer-120=Storage
# customsubcategory=realer-210=List view

plugin.tx_realer_propertylisting {
    view {
        # cat=plugin.tx_realer_propertylisting/realer-110; type=string; label=Path to template root (FE)
        templateRootPath = EXT:realer/Resources/Private/Templates/
        # cat=plugin.tx_realer_propertylisting/realer-110; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:realer/Resources/Private/Partials/
        # cat=plugin.tx_realer_propertylisting/realer-110; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:realer/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_realer_propertylisting/realer-120/a; type=string; label=Default storage PID
        storagePid =
    }
	settings {
		# cat=plugin.tx_realer_propertylisting/realer-210/a; type=string; label=Max image width in list view
		image.maxWidth = 400
		# cat=plugin.tx_realer_propertylisting/realer-210/b; type=string; label=Max text characters in list view
		text.maxCharacters = 250
		# cat=plugin.tx_realer_propertylisting/realer-210/c; type=string; label=Properties count per page
		propertyCountPerPage = 7
		# cat=plugin.tx_realer_propertylisting/realer-210/d; type=string; label=Map uri: Use printf format containing latitude and longitude
        mapUri = https://www.google.com/maps/@%s,%s,14z
	}
}