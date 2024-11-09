{pkgs ? import <nixpkgs> {}}:
pkgs.stdenv.mkDerivation{
  nativeBuildInputs = with pkgs; [
    php
    phpPackages.php-codesniffer
    phpPackages.composer
    phpactor
    onefetch
    vscode-langservers-extracted
  ];
  name = "bhbsd";
}
