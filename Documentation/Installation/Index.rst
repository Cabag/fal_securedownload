﻿.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _installation:

Installation
============

#. **Install ext:fal_securedownload**

   Download and install fal_securedownload through extension manager or clone from https://github.com/beechit/fal_securedownload.git in typo3conf/ext/

#. **Create non public file storage**

   Un-check the 'public' checkbox for your existing file storage or create a new file storage and set it to non public

   .. figure:: ../Images/secure-file-storage.png
      :width: 400px
      :alt: Create non-public file storage

      **Image 1:** Create non-public file storage

   Best is to have the fisycal folder outsite of your document root. If not add an .htaccess with "Deny from all" in your file storage root folder.

#. **Set permissions**

   Set fe_group permissions to a file or forder of the non-public file storage

   .. figure:: ../Images/set-folder-permissions.png
      :width: 400px
      :alt: Set FE permissions for folder

      **Image 2:** Set FE permissions for folder



