.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _configuration:

=======================
Configuration Reference
=======================


.. _config-typoscript:

TypoScript Reference
====================

plugin.tx_realer_propertylisting.persistance
--------------------------------------------

.. container:: ts-properties

   ============= ================== =================================================================================================== ====================
   Property      Data type          Description                                                                                         Default
   ============= ================== =================================================================================================== ====================
   storagePid    int                UID from page where the property records are located                                                n.a.
   ============= ================== =================================================================================================== ====================


plugin.tx_realer_propertylisting.settings
-----------------------------------------

.. container:: ts-properties

   ======================= ================== =================================================================================================== =======================================
   Property                Data type          Description                                                                                         Default
   ======================= ================== =================================================================================================== =======================================
   image.maxWidth          int                Maximum width for the generated images shown in the list view. Units are in px.                     400
   text.maxCharacters      int                Maximum number of characters shown per property in the list view. Words remain integer.             250
   propertyCountPerPage    int                Amount of properties shown per page in the list view. Might be reduced to improve page load.        7
   mapUri                  string             URL to show the properties location on a map. Use printf format containing latitude and longitude.  https://www.google.com/maps/@%s,%s,14z
   ======================= ================== =================================================================================================== =======================================


.. _config-pagets

PageTS
======

Some users might not need all available property characteristics. The shown
characteristics in the property form might be narrowed down using PageTS:

.. code-block:: typoscript

   TCEFORM.tx_realer_domain_model_property {
      sales_state.disabled = 1
      price_before.disabled = 1
   }
