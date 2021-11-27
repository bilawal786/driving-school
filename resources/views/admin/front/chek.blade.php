<div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Article Blog -->Titre du blog de l'article 1 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="articleBlogTitle1" value="{{$setting->articleBlogTitle1 ?? ''}}" placeholder="Entrez le Titre du blog 1" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Article Description -->Description d'article <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="articleDescription1" value="{{$setting->articleDescription1 ?? ''}}" placeholder="Entrez le  Description d'article" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->image de l'article(80x80)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('articleImage1') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre image</strong></center><input type="file" style="display: none;"name="articleImage1" value="{{ old('articleImage1') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp2" onchange="preview_image2(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image2" src="{{ asset($setting->articleImage1 ?? ' ')  }}" />
                    
                                        </div></div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Article Blog -->Titre du blog de l'article 2 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="articleBlogTitle2" value="{{$setting->articleBlogTitle2 ?? ''}}" placeholder="Entrez le Titre du blog 2" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Article Description -->Description d'article <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="articleDescription2" value="{{$setting->articleDescription2 ?? ''}}" placeholder="Entrez le  Description d'article" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->image de l'article(80x80)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('articleImage2') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre image</strong></center><input type="file" style="display: none;"name="articleImage2" value="{{ old('articleImage2') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp3" onchange="preview_image3(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image3" src="{{ asset($setting->articleImage2 ?? ' ')  }}" />
                    
                                        </div></div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"><!-- Article Blog -->Titre du blog de l'article 3 <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="articleBlogTitle3" value="{{$setting->articleBlogTitle3 ?? ''}}" placeholder="Entrez le Titre du blog 3" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"><!-- Article Description -->Description d'article <strong style="color: red;font-size: 20px;"> *</strong></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="articleDescription3" value="{{$setting->articleDescription3 ?? ''}}" placeholder="Entrez le  Description d'article" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><!--Icon-->image de l'article(80x80)<strong style="color: red;font-size: 20px;"> * </strong></label>
                                            <div class="col-sm-5">
                                               <label class="form-control @error('articleImage4') is-invalid @enderror">
                      <center><i class="fa fa-image"></i> <!-- Add Your Image --> <strong style="font-size: 18px;">Ajoutez Votre image</strong></center><input type="file" style="display: none;"name="articleImage3" value="{{ old('articleImage3') }}"  accept="image/png, image/gif, image/jpeg" id="imgInp4" onchange="preview_image4(event)">
                        </label>
                                            </div>
                                        
                                        <div class="col-sm-4">
                      
                                        <img id="output_image4" src="{{ asset($setting->articleImage3 ?? ' ')  }}" />
                    
                                        </div></div>

                                        //END FOOTER ARTICLE