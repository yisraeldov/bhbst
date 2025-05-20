{pkgs ? import <nixpkgs> {}}:
let
  cypress-newest = pkgs.cypress.overrideAttrs (oldAttrs: rec {
    version = "14.2.0";
    platform = "linux-x64";
    src = pkgs.fetchurl {
      url = "https://cdn.cypress.io/desktop/${version}/${platform}/cypress.zip";
      sha256 = "sha256-uANUePCzOCPoUrMz5KaWVYF+F9LKnFXoV5U8vZvh1K0=";
    };
  });
in
pkgs.stdenv.mkDerivation{
  CYPRESS_INSTALL_BINARY = 0;
  CYPRESS_RUN_BINARY = "${cypress-newest}/bin/Cypress";
  nativeBuildInputs = with pkgs; [
    php
    phpPackages.php-codesniffer
    phpPackages.composer
    phpactor
    onefetch
    nodejs
    vscode-langservers-extracted
    cypress-newest
    sqlite
  ];
  name = "bhbsd";
}
