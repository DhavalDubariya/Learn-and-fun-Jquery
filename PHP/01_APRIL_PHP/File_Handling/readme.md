# File Handling:-

=> readfile():-function reads a file and gives it to the output.

- The readfile() function is useful if all you want to do is open up a file and read its contents.

## fopen():- contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.

- r :- Open a file for read only. File pointer starts at the beginning of the file

- w :- Open a file for write only. Erases the contents of the file or creates a new
  file if it doesn't exist. File pointer starts at the beginning of the file

- a :- Open a file for write only. The existing data in file is preserved. File pointer
  starts at the end of the file. Creates a new file if the file doesn't exist

- x :- Creates a new file for write only. Returns FALSE and an error if file already exists

- r+ :- Open a file for read/ . File pointer starts at the beginning of the file

- w+ :- Open a file for read/write. Erases the contents of the file or creates a new file
  if it doesn't exist. File pointer starts at the beginning of the file

- a+ :- Open a file for read/write. The existing data in file is preserved. File pointer
  starts at the end of the file. Creates a new file if the file doesn't exist.

- x+ :- Creates a new file for read/write. Returns FALSE and an error if file already exists.

## PHP Filesystem:-

      fread():- function reads from an open file.
      
      fclose():- function is used to close an open file.
      
      fgets():- function is used to read a single line from a file.
      
      feof():- function checks if the "end-of-file" (EOF) has been reached.
     
               =>  function is useful for looping through data of unknown length.
      
      readfile():-It is useful if all you want to do is open up a file and read its contents.
      
      fopen():-contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.
      
      fwrite():-Writes to an open file (binary-safe).
      
      fgets():- It is used to read a single line from a file.
      
      feof:-function checks if the end-of-file (EOF) has been reached.
      
      fgetc():-function is used to read a single character from a file.
      
      basename():-Return filename from the specified path.
      
      Copy():-Copy file
      
      dirname():-Return the path of the parent directory.
      
      echo disk_free_space():-Return the free space, in bytes, of the C: directory:
      
      disk_total_space():-Return the total size, in bytes, of the C directory
      
      fflush():-Write all buffered output to the open file:
      
      fgetcsv():- Read and get line from the open CSV file.
      
      file_exists():-Check whether a file exists or note
      
      file_get_contents():- Read a file as a string.
      
      file_put_contents():-Write data to a file.(owerwrite data)
      
      fileatime():-Give last access time of file.
      
      filegroup():-Return the group ID of File.
      
      fileowner():- Return File owner id
      
      fileperms():-Display permissions as an octal value.
      
      filesize():- Return File Size.
      
      filetype():-Return the file type
      
      flock():-Lock and release a file.
      
      fnmatch():-Checking a color name against a shell wildcard pattern:
      
      fpassthru():- Read from the current position in file - until EOF, and then write the remaining data to the output buffer.
      
      fputcsv():- Format a line as CSV and writes it to an open file.
      
      fread():- Read 10 bytes from an open file.
      
      fstat():- Return information about file
      
      ftell():-Return the current position of the read/write pointer in an open file.
      
      glob():-Return an array of filenames or directories that matches the specified pattern.
      
      is_dir():-Check Given specified filename is directory or note.
      
      is_executable():-Check whether the specified filename is executable.
      
      is_file():-Check whether the specified filename is a regular file.
      
      is_link():-Chack whether the specified filename is link or not
      
      is_readable:-Check whether the specified filename is readable.
      
      is_uploaded_file():-Check whether the specified filename is uploaded via HTTP POST.
      
      is_writable():-Check whether the specified filename is writable.
      
      lchgrp():-Change the group ownership of a symbolic link.
      
      link():-Create a hard link.
      
      mkdir():-Create a directory
      
      parse_ini_file():-print Contents of test.ini
      
      parse_ini_string():- Parse an ini string.
      
      pathinfo():-Give info about file path.
      
      pclose():-Open and close a pipe to the program specified in the command parameter.
      
      realpath():-Returns the absolute pathname.
      
      realpath_cache_get():-Return realpath cache entries.
      
      realpath_cache_size():-Return realpath cache size.
      
      rename():- Change file name and directory
      
      rewind():- Rewind the position of the file pointer to biginning of the file.
      
      rmdir():-Remove images directory.
      
      set_file_buffer():-Create an unbuffered stream.
      
      symlink():-Create a symbolic link.
      
      tempnam():-Create a temporary file with a unique name in the specified directory.
      
      tempfile():-Create a temporary file with a unique name in read-write (w+) mode:
      
      The umask():-function changes the file permissions for files.
      
      unlink():-Delete File.


## Catch Function:-
     Use clearstatcache() function for below function to clears the file status cache.
     
     stat()
     lstat()
     file_exists()
     is_writable()
     is_readable()
     is_executable()
     is_file()
     is_dir()
     is_link()
     filectime()
     fileatime()
     filemtime()
     fileinode()
     filegroup()
     fileowner()
     filesize()
     filetype()
     fileperms()
