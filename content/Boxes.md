---
Title: Boxes
Description: A box for each performance need and budget
Template: page
---
<section class="section hero">
    <div class="container">
        <div class="hero-body">
            <h1 class="title has-text-centered">Tooloop Boxes</h1>
            <h2 class="subtitle has-text-centered">Industrial grade hardware, built to last.</h2>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="columns">
                <div class="column notification is-light" style="margin:1.5rem 0.75rem; padding: 2rem;">
                    <div class="level is-mobile">
                        <div class="level-left">
                            <div class="level-item"><i class="fa fa-shopping-cart fa-2x has-text-danger"></i></div>
                            <div class="level-item"><h2 class="title is-size-5">Buy from a partner</h2></div>
                        </div>
                    </div>
                    <p>For some models, I have found a partner to build and sell boxes to our spec.</p>
                    <p>Pre-assembled with pre-installed OS and professional support.</p>
                </div>
                <div class="is-divider-vertical is-hidden-mobile" data-content="OR"></div>
                <div class="is-divider is-hidden-tablet" data-content="OR"></div>
                <div class="column notification is-light" style="margin:1.5rem 0.75rem; padding: 2rem;">
                    <div class="level is-mobile">
                        <div class="level-left">
                            <div class="level-item"><i class="fa fa-wrench fa-2x has-text-danger"></i></div>
                            <div class="level-item"><h2 class="title is-size-5">Shop parts and build yourself</h2></div>
                        </div>
                    </div>
                    <p>Each box model has a community maintained list of parts, that meet the <a href="#Requirements">requirements</a> and are supported by the OS.</p>
                    <p>Shopping your own parts you have the freedom to customize builds and re-use parts you already have.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section is-medium hero is-bold is-info">
    <div class="container">
        <h1 class="title has-text-centered">Models</h1>
        <h2 class="subtitle has-text-centered">For each requirement and budget</h2>
        <p>&nbsp;</p>
        <div class="pricing-table is-comparative columns is-multiline is-mobile">

            <div class="pricing-plan is-one-fifth-desktop is-one-third-tablet column" style="padding:0;">
                <div class="plan-header has-text-info">
                    Box s<br>
                    <img src="%base_url%/assets/boxes/box-s.png" alt="Tooloop Box S" style="height: 120px;">
                </div>
                <div class="plan-items">
                    <div class="plan-item">Super small and darn cheap.</div>
                    <div class="plan-item">SOC</div>
                    <div class="plan-item">Raspberry Pi / ODROID</div>
                    <div class="plan-item">On-chip graphics</div>
                </div>
                <div class="plan-footer">
                    <div class="field" style="justify-content: center;">
                            <button class="button modal-button is-dark" onclick="openModal('box-s-parts-list')" style="width:100%;">
                                <span class="icon"><i class="fa fa-wrench"></i></span><span>Build</span>
                            </button>
                    </div>
                </div>
                <div class="has-text-grey-dark columns is-mobile is-marginless has-text-centered">
                    <div class="column"><span class="has-text-grey-light">&lt;</span> <strong>150 €</strong></div>
                </div>
            </div>
            
            
            <div class="pricing-plan is-one-fifth-desktop is-one-third-tablet column" style="padding:0;">
                <div class="plan-header has-text-primary">
                    Box M<br>
                    <img src="%base_url%/assets/boxes/box-m.png" alt="Tooloop Box M" style="height: 120px;">
                </div>
                <div class="plan-items">
                    <div class="plan-item"><span style="width: 100%;display: inline-block;">Small box.</span></div>
                    <div class="plan-item">Mini ITX</div>
                    <div class="plan-item">Celeron / Intel Core i3</div>
                    <div class="plan-item">Intel HD graphics</div>
                </div>
                <div class="plan-footer">
                    <div class="field has-addons" style="justify-content: center;">
                        <p class="control" style="width:50%; margin-right:0">
                            <button class="button modal-button is-primary tooltip" data-tooltip="No partner yet" disabled style="width:100%;">
                                <span class="icon"><i class="fa fa-shopping-cart"></i></span><span>Buy</span>
                            </button>
                        </p>
                        <p class="control" style="width:50%; margin-right:0">
                            <button class="button modal-button is-dark" onclick="openModal('box-m-parts-list')" style="width:100%;">
                                <span class="icon"><i class="fa fa-wrench"></i></span><span>Build</span>
                            </button>
                        </p>
                    </div>
                </div>
                <div class="has-text-grey-dark columns is-mobile is-marginless has-text-centered">
                    <div class="column"><span class="has-text-grey-light">–</span></div>
                    <div class="column"><strong>500 €</strong></div>
                </div>
            </div>
            
            
            <div class="pricing-plan is-one-fifth-desktop is-one-third-tablet column" style="padding:0;">
                <div class="plan-header has-text-danger">
                    Rack M<br>
                    <img src="%base_url%/assets/boxes/rack-m.png" alt="Tooloop Rack M" style="height: 120px;">
                </div>
                <div class="plan-items">
                    <div class="plan-item"><span style="width: 100%;display: inline-block;">Small and sweet 1U rack system.</span></div>
                    <div class="plan-item">µATX</div>
                    <div class="plan-item">Intel Core i3</div>
                    <div class="plan-item">Intel HD graphics</div>
                </div>
                <div class="plan-footer">
                    <div class="field has-addons" style="justify-content: center;">
                        <p class="control" style="width:50%; margin-right:0">
                            <button class="button modal-button is-danger" onclick="openModal('rack-m-partners')" style="width:100%;">
                                <span class="icon"><i class="fa fa-shopping-cart"></i></span><span>Buy</span>
                            </button>
                        </p>
                        <p class="control" style="width:50%; margin-right:0">
                            <button class="button modal-button is-dark" onclick="openModal('rack-m-parts-list')" style="width:100%;">
                                <span class="icon"><i class="fa fa-wrench"></i></span><span>Build</span>
                            </button>
                        </p>
                    </div>
                </div>
                <div class="has-text-grey-dark columns is-mobile is-marginless has-text-centered">
                    <div class="column"><strong>925 €</strong></div>
                    <div class="column"><strong>630 €</strong></div>
                </div>
            </div>
            
            
            <div class="pricing-plan is-one-fifth-desktop is-one-third-tablet column" style="padding:0;">
                <div class="plan-header has-text-danger">
                    Rack L<br>
                    <img src="%base_url%/assets/boxes/rack-l.png" alt="Tooloop Rack L" style="height: 120px;">
                </div>
                <div class="plan-items">
                    <div class="plan-item"><span style="width: 100%;display: inline-block;">Serious CPU and GPU power. 2U rack space.</span></div>
                    <div class="plan-item">µATX</div>
                    <div class="plan-item">Intel Core i5</div>
                    <div class="plan-item">Nvidia Quadro</div>
                </div>
                <div class="plan-footer">
                    <div class="field has-addons" style="justify-content: center;">
                        <p class="control" style="width:50%; margin-right:0">
                            <button class="button modal-button is-danger" onclick="openModal('rack-l-partners')" style="width:100%;">
                                <span class="icon"><i class="fa fa-shopping-cart"></i></span><span>Buy</span>
                            </button>
                        </p>
                        <p class="control" style="width:50%; margin-right:0">
                            <button class="button modal-button is-dark" onclick="openModal('rack-l-parts-list')" style="width:100%;">
                                <span class="icon"><i class="fa fa-wrench"></i></span><span>Build</span>
                            </button>
                        </p>
                    </div>
                </div>
                <div class="has-text-grey-dark columns is-mobile is-marginless has-text-centered">
                    <div class="column"><strong>1.747 €</strong></div>
                    <div class="column"><strong>1.390 €</strong></div>
                </div>
            </div>
            

            <div class="pricing-plan is-one-fifth-desktop is-one-third-tablet column" style="padding:0;">
                <div class="plan-header has-text-danger">
                    Rack XL<br>
                    <img src="%base_url%/assets/boxes/rack-xl.png" alt="Tooloop Rack XL" style="height: 120px;">
                </div>
                <div class="plan-items">
                    <div class="plan-item"><span style="width: 100%;display: inline-block;">The <a href="http://doom.wikia.com/wiki/BFG9000" class="has-text-link">BFG9000</a> of media servers. 4U rack space.</span></div>
                    <div class="plan-item">ATX</div>
                    <div class="plan-item">Intel Core i7</div>
                    <div class="plan-item">Nvidia Quadro</div>
                </div>
                <div class="plan-footer">
                    <div class="field has-addons" style="justify-content: center;">
                        <p class="control" style="width:50%; margin-right:0">
                            <button class="button modal-button is-danger" onclick="openModal('rack-xl-partners')" style="width:100%;">
                                <span class="icon"><i class="fa fa-shopping-cart"></i></span><span>Buy</span>
                            </button>
                        </p>
                        <p class="control" style="width:50%; margin-right:0">
                            <button class="button modal-button is-dark" onclick="openModal('rack-xl-parts-list')" style="width:100%;">
                                <span class="icon"><i class="fa fa-wrench"></i></span><span>Build</span>
                            </button>
                        </p>
                    </div>
                </div>
                <div class="has-text-grey-dark columns is-mobile is-marginless has-text-centered">
                    <div class="column"><strong>2.246 €</strong></div>
                    <div class="column"><strong>1.912 €</strong></div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section is-medium">
    <div class="container content">
        <a name="Requirements"></a>
        <h1 class="title has-text-centered">Requirements</h1>
        <p class="subtitle has-text-centered">All boxes should meet these requirements or at least have a very good reason not to.<br>
        If you’re a vendor and want to sell Tooloop Boxes? Cool, please do have a look at the following list and <a href="https://www.vollstock.de">get in contact</a>.</p>

        <div class="columns is-centered" style="margin-top:3rem;">
            <div class="column is-4 is-offset-1 content">
                <h3><span class="icon"><i class="fas fa-clipboard-check has-text-primary"></i></span> Chassis</h3>
                <ul>
                    <li><strong>Rack-mountable</strong> A computer belongs in rack. Only very rarerly there's a reason to put it elsewhere. It’s safe and it’s easy to reach and maintain.</li>
                    <li><strong>Size</strong> mostly doesn’t matter! Resist the urge of going too small! Do you really, really need to? Small = hot.</li>
                    <li><strong>Cooling</strong> does matter! Passive cooling is mostly not for us media people. Not if your app uses at least some computational power.</li>
                    <li><strong>Dust filters</strong> are the logic consequence of active cooling. If you can't provide dust filters in the chassis or rack, you will be back in half a year.</li>
                    <li><strong>Silent</strong> would be nice. In a museum, a showroom or in a theatre we want to be as silent as possible. Not on the expense of bad cooling, though.</li>
                </ul>
            </div>
            <div class="column is-4 is-offset-1 content">
                <h3><span class="icon"><i class="fas fa-clipboard-check has-text-primary"></i></span> Longevity</h3>
                <p>Industrial and server grade components are built to last. They withstand high temperatures, run 24/7 and you can still purchase them in a year or two.</p>
                <h3><span class="icon"><i class="fas fa-clipboard-check has-text-primary"></i></span> SSD-Drive</h3>
                <p>They’re loading your videos and images much faster than spinning discs. Depending on the chassis, there’s options to mount tiny SSDs.</p>
                <h3><span class="icon"><i class="fas fa-clipboard-check has-text-primary"></i></span> BIOS</h3>
                <p>It should have a quiet boot option and be able to wake-on-lan.</p>
            </div>
        </div>
    </div>
</section>

<!-- ###################################################################### -->
<!-- BOX S                                                                  -->
<!-- ###################################################################### -->

<div id="box-s-parts-list" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Parts lists – Box S</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body content">
        <h1>Odroid</h1>
        <table class="table is-striped is-narrow">
            <thead>
                <tr>
                    <th>Part</th>
                    <th>Description</th>
                    <th class="has-text-centered"><abbr title="Meets requirements">Req.</abbr></th>
                    <th class="has-text-right">Price <a href="#footnote-price"><sup>1</sup></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Board</th>
                    <td><a href="http://www.hardkernel.com/main/shop/good_list.php?lang=en">ODROID-XU4</a></td>
                    <td class="has-text-centered"><span class="icon tooltip" data-tooltip="No wake on lan"><i class="fa fa-minus has-text-danger"></i></span></td>
                    <td class="has-text-right">80 €</td>
                </tr>
                <tr>
                    <th>Case</th>
                    <td><a href="http://www.hardkernel.com/main/shop/good_list.php?lang=en">ODROID-XU4 Case</a></td>
                    <td class="has-text-centered"><span class="icon tooltip" data-tooltip="No dust filter"><i class="fa fa-minus has-text-danger"></i></span></td>
                    <td class="has-text-right">8 €</td>
                </tr>
                <tr>
                    <th>Power supply</th>
                    <td><a href="http://www.hardkernel.com/main/shop/good_list.php?lang=en">5 V/4 A Power Supply</a></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">10 €</td>
                </tr>
                <tr>
                    <th>HD</th>
                    <td><a href="http://www.hardkernel.com/main/shop/good_list.php?lang=en">16 GB eMMC Module XU4 Linux</a></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">45 €</td>
                </tr>
            </tbody>
            <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th class="has-text-right">143 €</th>
            </tfoot>
        </table>
        <h1>Raspberry Pi</h1>
        <table class="table is-striped is-narrow">
            <thead>
                <tr>
                    <th>Part</th>
                    <th>Description</th>
                    <th class="has-text-centered"><abbr title="Meets requirements">Req.</abbr></th>
                    <th class="has-text-right">Price <a href="#footnote-price"><sup>1</sup></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Board</th>
                    <td><a href="https://www.raspberrypi.org/products/raspberry-pi-3-model-b-plus/">Raspberry Pi 3 Model B+</a></td>
                    <td class="has-text-centered"><span class="icon tooltip" data-tooltip="No wake on lan"><i class="fa fa-minus has-text-danger"></i></span></td>
                    <td class="has-text-right">37 €</td>
                </tr>
                <tr>
                    <th>Heat sinks</th>
                    <td></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">5 €</td>
                </tr>
                <tr>
                    <th>Case</th>
                    <td>Metal case</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">20 €</td>
                </tr>
                <tr>
                    <th>Power supply</th>
                    <td><a href="https://www.raspberrypi.org/products/raspberry-pi-universal-power-supply/">5 V/2.5 A Power Supply</a></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">10 €</td>
                </tr>
                <tr>
                    <th>HD</th>
                    <td>16 GB Class 10 Micro SD Card</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">10 €</td>
                </tr>
            </tbody>
            <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th class="has-text-right">82 €</th>
            </tfoot>
        </table>
        <p id="footnote-price" class="has-text-grey"><em><strong>(1)</strong> Prices are estimates and may vary depending on where you source the parts.</em></p>
    </section>
  </div>
</div>

<!-- ###################################################################### -->
<!-- BOX M                                                                  -->
<!-- ###################################################################### -->

<div id="box-m-parts-list" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Parts lists – Box M</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body content">
        <table class="table is-striped is-narrow">
            <thead>
                <tr>
                    <th>Part</th>
                    <th>Description</th>
                    <th class="has-text-centered"><abbr title="Meets requirements">Req.</abbr></th>
                    <th class="has-text-right">Price <a href="#footnote-price"><sup>1</sup></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Mainboard</th>
                    <td>
                        <a href="http://www.fujitsu.com/global/microsites/mainboards/solution/thin-client/d3434-s/">Fujitsu D3434-S</a><br>
                        Mini-ITX, 24/7, 0–60 °C
                    </td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">205 €</td>
                </tr>
                <tr>
                    <th>Cooler</th>
                    <td><a href="https://www.dynatron.co/product-page/k2">Dynatron K2</a><br>for Mini ITX</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">25 €</td>
                </tr>
                <tr>
                    <th>Case</th>
                    <td>e.g.<a href="https://buy.advantech.eu/Chassis/Embedded-Mini-ITX-Chassis/model-AIMB-B2000-15ZE.htm">Advantech AIMB-B2000-15ZE</a><br>150 W PSU</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">130 €</td>
                </tr>
                <tr>
                    <th>CPU (Option 1)</th>
                    <td><a href="https://ark.intel.com/de/products/122825/Intel-Celeron-Processor-G3930TE-2M-Cache-2_70-GHz">Intel Celeron G3930TE 2&nbsp;×&nbsp;2.70GHz</a><br>Intel HD-Grafik 610</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">45 €</td>
                </tr>
                <tr>
                    <th>CPU (Option 2)</th>
                    <td><a href="https://ark.intel.com/products/97485/Intel-Core-i3-7100T-Processor-3M-Cache-3_40-GHz">Intel Core i3-7100T 2&nbsp;×&nbsp;3.40GHz</a><br>Intel HD Graphics 630</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">(110 €)</td>
                </tr>
                <tr>
                    <th>HD</th>
                    <td>64 GB M.2</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">45 €</td>
                </tr>
                <tr>
                    <th>RAM</th>
                    <td>4 GB</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">45 €</td>
                </tr>
            </tbody>
            <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th class="has-text-right">505 €</th>
            </tfoot>
        </table>
        <p id="footnote-price" class="has-text-grey"><em><strong>(1)</strong> Prices are estimates and may vary depending on where you source the parts.</em></p>
    </section>
  </div>
</div>

<!-- ###################################################################### -->
<!-- RACK M                                                                  -->
<!-- ###################################################################### -->

<div id="rack-m-parts-list" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Parts lists – Rack M</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body content">
        <table class="table is-striped is-narrow">
            <thead>
                <tr>
                    <th>Part</th>
                    <th>Description</th>
                    <th class="has-text-centered"><abbr title="Meets requirements">Req.</abbr></th>
                    <th class="has-text-right">Price <a href="#footnote-price"><sup>1</sup></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Mainboard</th>
                    <td>
                        <a href="http://www.fujitsu.com/global/products/computing/peripheral/mainboards/industrial-mainboards/d3441s.html">Fujitsu D3441-S</a><br>
                        μATX, 24/7, 0–60 °C
                    </td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">205 €</td>
                </tr>
                <tr>
                    <th>CPU</th>
                    <td>
                        <a href="https://ark.intel.com/products/97485/Intel-Core-i3-7100T-Processor-3M-Cache-3_40-GHz">Intel Core i3-7100T 2&nbsp;×&nbsp;3.40GHz</a><br>
                        Intel HD Graphics 630
                    </td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">110 €</td>
                </tr>
                <tr>
                    <th>Cooler</th>
                    <td><a href="https://www.dynatron.co/product-page/k199">Dynatron K199</a><br>for 1U</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">35 €</td>
                </tr>
                <tr>
                    <th>Chassis</th>
                    <td>e.g. <a href="https://shop.yakkaroo.de/19-inch-mini-ITX-rackmount-1U-server-chassis-IPC-E125-25cm-depth-250W_1">IPC-C130B</a><br></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">85 €</td>
                </tr>
                <tr>
                    <th>Power supply</th>
                    <td>e.g. Seasonic SS-250SU 250 W Flex ATX</td>
                    <td class="has-text-centered"></td>
                    <td class="has-text-right">45 €</td>
                </tr>
                <tr>
                    <th>HD</th>
                    <td>mSATA 120 GB</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">60 €</td>
                </tr>
                <tr>
                    <th>RAM</th>
                    <td>4 GB</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">45 €</td>
                </tr>
            </tbody>
            <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th class="has-text-right">630 €</th>
            </tfoot>
        </table>
        <p id="footnote-price" class="has-text-grey"><em><strong>(1)</strong> Prices are estimates and may vary depending on where you source the parts.</em></p>
    </section>
  </div>
</div>

<div id="rack-m-partners" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Buy Rack M</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
        <div class="columns">
            <div class="column is-5">
                <figure>
                    <img id="spectra-rack-m" src="%base_url%/assets/boxes/spectra-rack-m.jpg" style="padding: 2rem 1rem 0 0;">
                </figure>
            </div>
            <div class="column is-7">
                <img src="%base_url%/assets/boxes/spectra-logo.svg" style="width: 6rem; margin-bottom: 1rem">
                
                <h2 class="title is-5">RACK&nbsp;M, 19"&nbsp;1U, CORE&nbsp;i3, INTEL&nbsp;HD&nbsp;GRAPHICS</h2>
                <h3 class="title has-text-link">925&nbsp;€</h3>

                <div class="buttons">
                    <a href="%base_url%/assets/boxes/Datasheet-Rack M_1.0.pdf" class="button is-light"><span class="icon"><i class="fa fa-file-alt"></i></span><span>Datasheet</span></a>
                    <a href="https://www.spectra.de/en/" class="button is-primary"><span class="icon"><i class="fa fa-shopping-cart"></i></span><span>Buy from spectra</span></a>
                </div>
                <div class="content">
                    <p>Based on Intels 6th generation Skylake architecture, the system features Intel HD 530 graphics.</p>
                    <p>Consuming as little as 35 W, the CPU generates very little heat. The chassis is not equipped with dust filters to further optimize air flow which needs to be considered.</p>
                    <strong>Features</strong>
                    <ul>
                        <li>Rugged 19", 1U industrial workstation</li>
                        <li>Steel chassis with 400 W PSU</li>
                        <li>Intel Core i3-6100TE CPU, 4 GB RAM</li>
                        <li>128 GB SSD</li>
                        <li>Industrial mainboard with Intel H110 Express Chipset (Skylake)</li>
                        <li>Intel HD 530 graphics</li>
                        <li>2&nbsp;×&nbsp;Intel GbE LAN</li>
                        <li>External Connectors: 4&nbsp;×&nbsp;DP, 2&nbsp;×&nbsp;LAN, 2&nbsp;×&nbsp;USB3.0, 4&nbsp;×&nbsp;USB2.0, Audio Mic. In / Line in / Line out, 2&nbsp;×&nbsp;PS/2</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
  </div>
</div>

<!-- ###################################################################### -->
<!-- RACK L                                                                 -->
<!-- ###################################################################### -->

<div id="rack-l-parts-list" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Parts lists – Rack L</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body content">
        <table class="table is-striped is-narrow">
            <thead>
                <tr>
                    <th>Part</th>
                    <th>Description</th>
                    <th class="has-text-centered"><abbr title="Meets requirements">Req.</abbr></th>
                    <th class="has-text-right">Price <a href="#footnote-price"><sup>1</sup></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Mainboard</th>
                    <td>
                        <a href="http://www.fujitsu.com/global/products/computing/peripheral/mainboards/industrial-mainboards/d3441s.html">Fujitsu D3441-S</a><br>
                        μATX, 24/7, 0–60 °C
                    </td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">205 €</td>
                </tr>
                <tr>
                    <th>CPU</th>
                    <td>
                        <a href="https://ark.intel.com/products/97150/Intel-Core-i5-7600-Processor-6M-Cache-up-to-4_10-GHz">Intel Core i5 7600 4&nbsp;×&nbsp;3.50GHz</a>
                    </td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">200 €</td>
                </tr>
                <tr>
                    <th>Cooler</th>
                    <td><a href="https://www.dynatron.co/product-page/k666">Dynatron K666</a><br>for 2U</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">45 €</td>
                </tr>
                <tr>
                    <th>Chassis</th>
                    <td>
                        <a href="http://www.chenbro.com/en-global/products/RackmountChassis/2U_Chassis/RM24100">Chenbro RM24100</a><br></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">130 €</td>
                </tr>
                <tr>
                    <th>Power supply</th>
                    <td>500 W</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">70 €</td>
                </tr>
                <tr>
                    <th>Silent fans</th>
                    <td>
                        <a href="https://noctua.at/en/nf-a8-pwm">1 &times; Noctua NF-A8 PWM, 80 mm</a>,<br><a href="https://noctua.at/en/nf-a4x20-5v-pwm">2 &times; Noctua NF-A4x20 5V PWM, 40 mm</a></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">45 €</td>
                </tr>
                <tr>
                    <th>HD</th>
                    <td>SSD 256 GB</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">130 €</td>
                </tr>
                <tr>
                    <th>RAM</th>
                    <td>8 GB</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">85 €</td>
                </tr>
                <tr>
                    <th>GPU</th>
                    <td><a href="https://www.nvidia.de/design-visualization/quadro-desktop-gpus">Nvidia Quadro P2000</a></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">450 €</td>
                </tr>
                <tr>
                    <th>Riser card</th>
                    <td>for GPU</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">30 €</td>
                </tr>
            </tbody>
            <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th class="has-text-right">1.390 €</th>
            </tfoot>
        </table>
        <p id="footnote-price" class="has-text-grey"><em><strong>(1)</strong> Prices are estimates and may vary depending on where you source the parts.</em></p>
    </section>
  </div>
</div>

<div id="rack-l-partners" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Buy Rack L</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
        <div class="columns">
            <div class="column is-5">
                <figure>
                    <img id="spectra-rack-l" src="%base_url%/assets/boxes/spectra-rack-l.jpg" style="padding: 2rem 1rem 0 0;">
                </figure>
            </div>
            <div class="column is-7">
                <img src="%base_url%/assets/boxes/spectra-logo.svg" style="width: 6rem; margin-bottom: 1rem">
                
                <h2 class="title is-5">RACK&nbsp;L, 19"&nbsp;2U, CORE&nbsp;i5, NVIDIA&nbsp;QUADRO&nbsp;P2000</h2>
                <h3 class="title has-text-link">1.747&nbsp;€</h3>
                
                <div class="buttons">
                    <a href="%base_url%/assets/boxes/Datasheet-RackL-1_0.pdf" class="button is-light"><span class="icon"><i class="fa fa-file-alt"></i></span><span>Datasheet</span></a><br/>
                    <a href="https://www.spectra.de/en/" class="button is-primary"><span class="icon"><i class="fa fa-shopping-cart"></i></span><span>Buy from spectra</span></a>
                </div>

                <div class="content">
                    <p>No compromise was made building this system. Serious CPU power and professional NVidia graphics will bring enough bang for any kind of project.</p>
                    <p>The chassis has good airflow and is equipped with dust filters.</p>
                    <strong>Features</strong>
                    <ul>
                        <li>Rugged 19", 2U industrial workstation</li>
                        <li>Steel chassis with 500 W PSU</li>
                        <li>Intel Core i5-6500 CPU</li>
                        <li>8 GB RAM</li>
                        <li>256 GB SSD</li>
                        <li>Industrial mainboard with Intel  H110 Express Chipset (Skylake) and 1&nbsp;×&nbsp;PCIe(x16)</li>
                        <li>Nvidia Quadro P2000 professional workstation graphics card</li>
                        <li>2&nbsp;×&nbsp;Intel GbE LAN</li>
                        <li>External Connectors: 4&nbsp;×&nbsp;DP, 2&nbsp;×&nbsp;LAN,  2&nbsp;×&nbsp;USB3.0, 4&nbsp;×&nbsp;USB2.0, Audio Mic. In / Line in / Line out, 2&nbsp;×&nbsp;PS/2</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
  </div>
</div>

<!-- ###################################################################### -->
<!-- RACK XL                                                                -->
<!-- ###################################################################### -->

<div id="rack-xl-parts-list" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Parts lists – Rack XL</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body content">
        <table class="table is-striped is-narrow">
            <thead>
                <tr>
                    <th>Part</th>
                    <th>Description</th>
                    <th class="has-text-centered"><abbr title="Meets requirements">Req.</abbr></th>
                    <th class="has-text-right">Price <a href="#footnote-price"><sup>1</sup></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Mainboard</th>
                    <td>
                        <a href="http://www.fujitsu.com/global/products/computing/peripheral/mainboards/industrial-mainboards/d3441s.html">Fujitsu D3441-S</a><br>
                        μATX, 24/7, 0–60 °C
                    </td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">205 €</td>
                </tr>
                <tr>
                    <th>CPU</th>
                    <td>
                        <a href="https://ark.intel.com/products/97128/Intel-Core-i7-7700-Processor-8M-Cache-up-to-4_20-GHz">Intel Core i7 7700 4&nbsp;×&nbsp;3.60GHz </a>
                    </td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">300 €</td>
                </tr>
                <tr>
                    <th>Cooler</th>
                    <td><a href="https://www.dynatron.co/product-page/k17">Dynatron K17</a><br>for 3U and up</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">45 €</td>
                </tr>
                <tr>
                    <th>Chassis</th>
                    <td>
                        <a href="http://www.chenbro.com/en-global/products/RackmountChassis/4U_Chassis/RM42300">4 HE, Chenbro RM4230</a></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">140 €</td>
                </tr>
                <tr>
                    <th>Power supply</th>
                    <td>500 W</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">70 €</td>
                </tr>
                <tr>
                    <th>Chassis fans</th>
                    <td>
                        <a href="https://noctua.at/en/">Noctua 2 &times; 80 mm</a><br></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">32 €</td>
                </tr>
                <tr>
                    <th>HD</th>
                    <td>SSD 256 GB</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">130 €</td>
                </tr>
                <tr>
                    <th>RAM</th>
                    <td>16 GB</td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">140 €</td>
                </tr>
                <tr>
                    <th>GPU</th>
                    <td><a href="https://www.nvidia.de/design-visualization/quadro-desktop-gpus">Nvidia Quadro P4000</a></td>
                    <td class="has-text-centered"><span class="icon"><i class="fa fa-check has-text-success"></i></span></td>
                    <td class="has-text-right">850 €</td>
                </tr>
            </tbody>
            <tfoot>
                <th></th>
                <th></th>
                <th></th>
                <th class="has-text-right">1.920 €</th>
            </tfoot>
        </table>
        <p id="footnote-price" class="has-text-grey"><em><strong>(1)</strong> Prices are estimates and may vary depending on where you source the parts.</em></p>
    </section>
  </div>
</div>

<div id="rack-xl-partners" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Buy Rack XL</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
        <div class="columns">
            <div class="column is-5">
                <figure>
                    <img id="spectra-rack-xl" src="%base_url%/assets/boxes/spectra-rack-xl.jpg" style="padding: 2rem 1rem 0 0;">
                </figure>
            </div>
            <div class="column is-7">
                <img src="%base_url%/assets/boxes/spectra-logo.svg" style="width: 6rem; margin-bottom: 1rem">
                
                <h2 class="title is-5">RACK&nbsp;XL, 19"&nbsp;4U, CORE&nbsp;i7, NVIDIA&nbsp;QUADRO&nbsp;P4000</h2>
                <h3 class="title has-text-link">2.246&nbsp;€</h3>
                
                <div class="buttons">
                    <a href="%base_url%/assets/boxes/Datasheet-RackXL-1_0.pdf" class="button is-light"><span class="icon"><i class="fa fa-file-alt"></i></span><span>Datasheet</span></a><br/>
                    <a href="https://www.spectra.de/en/" class="button is-primary"><span class="icon"><i class="fa fa-shopping-cart"></i></span><span>Buy from spectra</span></a>
                </div>

                <div class="content">
                    <p>No compromise was made building this system. Serious CPU and graphics power for any kind of project.</p>
                    <p>The chassis has very good airflow and offers enough space for every component you need. It’s also equipped with dust filters.</p>
                    <strong>Features</strong>
                    <ul>
                        <li>Rugged 19", 4U industrial workstation</li>
                        <li>Steel chassis with 500 W PSU</li>
                        <li>Intel Core i7-6700 CPU</li>
                        <li>16 GB RAM</li>
                        <li>256 GB SSD</li>
                        <li>Industrial mainboard with Intel  H110 Express Chipset (Skylake) and 1&nbsp;×&nbsp;PCIe(x16), 4&nbsp;×&nbsp;PCIe(x1), 2&nbsp;×&nbsp;PCI</li>
                        <li>Nvidia Quadro P4000 professional workstation graphics card</li>
                        <li>2&nbsp;×&nbsp;Intel GbE LAN</li>
                        <li>External Connectors: 4&nbsp;×&nbsp;DP, 2&nbsp;×&nbsp;LAN,  2&nbsp;×&nbsp;USB3.0, 4&nbsp;×&nbsp;USB2.0, Audio Mic. In / Line in / Line out, 2&nbsp;×&nbsp;PS/2</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
  </div>
</div>