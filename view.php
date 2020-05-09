<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <?php
      echo("view");
      echo "<hr>"


      ?>
      <?php
      my $gnuplotCommands = "set term png; plot sin(x)";
    #&errmsg("commands = '$gnuplotCommands'");
    my $pid = open2(*Reader, *Writer, " gnuplot " ) or die "could not open $gnuplot: $!";
    select *Writer;
    $| = 1;  # flush all writes down the pipe.
    print Writer $gnuplotCommands or die "Could not write data to $gnuplot: $!";
    close Writer or die "Ploblem closing $gnuplot, status=$?";

    select STDOUT;
    binmode(Reader);
    my $buffer = "";
    my $binaryPic = "";
    while (read Reader, $buffer, 1024) {
        $binaryPic .= $buffer;
    }
    close Reader or die "Problem closing $gnuplot, status=$?";
    print 'Content-type: image/png; name"testfile"\n';
    print 'Content-Disposition: filename="testfile.png';
    print "\n\n";
    print $binaryPic;
    ?>

  </body>
</html>