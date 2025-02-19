const Footer = () => {
    return (
      <footer className="bg-fuchsia-950 text-gray-300 mt-16">
        <div className="container mx-auto px-4 py-12">
          <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
            {/* Company Info */}
            <div className="space-y-4">
              <h3 className="text-white text-lg font-bold">Brand Name</h3>
              <p className="text-sm">
                Crafting digital experiences that inspire and engage. Let's build something amazing together.
              </p>
            </div>
  
            {/* Quick Links */}
            <div className="space-y-4">
              <h4 className="text-white text-lg font-bold">Quick Links</h4>
              <nav className="space-y-2">
                <a href="#" className="block hover:text-white transition-colors duration-300">About Us</a>
                <a href="#" className="block hover:text-white transition-colors duration-300">Services</a>
                <a href="#" className="block hover:text-white transition-colors duration-300">Portfolio</a>
                <a href="#" className="block hover:text-white transition-colors duration-300">Blog</a>
              </nav>
            </div>
  
            {/* Legal */}
            <div className="space-y-4">
              <h4 className="text-white text-lg font-bold">Legal</h4>
              <nav className="space-y-2">
                <a href="#" className="block hover:text-white transition-colors duration-300">Privacy Policy</a>
                <a href="#" className="block hover:text-white transition-colors duration-300">Terms of Service</a>
                <a href="#" className="block hover:text-white transition-colors duration-300">Cookie Policy</a>
              </nav>
            </div>
  
            {/* Social Media */}
            <div className="space-y-4">
              <h4 className="text-white text-lg font-bold">Follow Us</h4>
              <div className="flex space-x-4">
                <a href="#" className="text-gray-400 hover:text-white transition-colors duration-300">
                  <i className="fab fa-twitter"></i>
                </a>
                <a href="#" className="text-gray-400 hover:text-white transition-colors duration-300">
                  <i className="fab fa-facebook"></i>
                </a>
                <a href="#" className="text-gray-400 hover:text-white transition-colors duration-300">
                  <i className="fab fa-instagram"></i>
                </a>
                <a href="#" className="text-gray-400 hover:text-white transition-colors duration-300">
                  <i className="fab fa-linkedin"></i>
                </a>
              </div>
            </div>
          </div>
  
          {/* Copyright */}
          <div className="border-t border-gray-800 mt-8 pt-8 text-center text-sm">
            <p>&copy; {new Date().getFullYear()} Brand Name. All rights reserved.</p>
          </div>
        </div>
      </footer>
    );
  };
  
  export default Footer;