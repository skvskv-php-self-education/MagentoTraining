<?php

    class IntendedCrashException extends Exception{}

    echo "I'm gonna crash, check the error log ;-)";

    throw new IntendedCrashException("This crash if for testing purpose :)");