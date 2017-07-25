
plugin.tx_realer_objectlisting {
    view {
        # cat=plugin.tx_realer_objectlisting/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:realer/Resources/Private/Templates/
        # cat=plugin.tx_realer_objectlisting/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:realer/Resources/Private/Partials/
        # cat=plugin.tx_realer_objectlisting/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:realer/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_realer_objectlisting//a; type=string; label=Default storage PID
        storagePid =
    }
}
