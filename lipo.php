<?php


    $file_list = explode(' ', 'libboost.a libboost_atomic.a libboost_chrono.a libboost_date_time.a libboost_exception.a libboost_filesystem.a libboost_program_options.a libboost_random.a libboost_signals.a libboost_system.a libboost_thread.a libboost_unit_test_framework.a');
    $folder_list = explode(' ', 'arm64 armv7 armv7s i386 x86_64');

    $prefix = '/Users/momo/htdocs/boost_build_for_ios/ios/build';

    foreach ($file_list as $file) {
        $cmd = 'lipo -create ';
        foreach ($folder_list as $folder) {
           $cmd .= "$prefix/$folder/$file ";
        }
        $cmd .= "-output $prefix/universal/$file";
        SYSTEM($cmd);
    }

?>
