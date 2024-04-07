**README**

**PHP Script: Compress Folder into ZIP and Download Without Saving ZIP File**

**Overview:**

This PHP script provides a convenient solution for compressing a folder into a ZIP file and enabling users to download it without saving the ZIP file to the disk. It utilizes the ZipArchive class in PHP for efficient ZIP file manipulation.

**Usage:**

1. **Upload the Script:**

   Upload the PHP script (`compress_and_download.php`) to your web server.

2. **Ensure Permissions:**

   Ensure that the directory where the script resides has appropriate permissions to create and delete files. This is crucial as the script will create a temporary ZIP file during the download process.

3. **Access the Script:**

   Access the script via a web browser by navigating to its URL. For example:

   ```
   http://yourdomain.com/compress_and_download.php
   ```

4. **Execution:**

   Upon accessing the script, it will automatically execute. It compresses all files within the specified folder (`./images` in this case) into a ZIP file.

5. **Download the ZIP File:**

   Once the compression is complete, the script prompts the user to download the ZIP file (`download.zip`) containing the compressed files. The ZIP file is served directly to the user's browser without being saved to the disk.

6. **Cleanup:**

   After the download, the script automatically deletes the temporary ZIP file to maintain a clutter-free server environment.

**Important Notes:**

- Ensure that the PHP script has sufficient permissions to read files from the specified folder (`./images`) and create a temporary ZIP file in the current directory.
- Verify that the folder (`./images`) contains the files intended for compression into the ZIP file. Adjust the folder path (`./images`) in the script if needed.
- PHP's ZipArchive class must be enabled in your PHP configuration for the script to function correctly.
- Consider implementing additional security measures, such as input validation and sanitization, to mitigate potential vulnerabilities, particularly in production environments.

**Contributing:**

Contributions to this project are welcomed! If you encounter any issues or have suggestions for improvements, please feel free to open an issue or submit a pull request.

**License:**

This project is licensed under the [MIT License](LICENSE).

**Author:**

Virul Nirmala - https://virul.me

**Acknowledgments:**

- This script was developed to provide a straightforward solution for compressing folders into ZIP files and facilitating their direct download without saving them to the disk.
- Special thanks to the PHP community for providing the ZipArchive class, simplifying ZIP file manipulation in PHP.
