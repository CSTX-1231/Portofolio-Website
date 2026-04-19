export default function Navbar() {
  return (
  <nav className="fixed top-0 w-full z-50 transition all duration-300 bg-slate-950/20 backdrop-blur-sm">
    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div>
        <div>
          <img src="/react.svg" className="h-100 w-100 ml-95 mb-5 mt-20"/>
          <div>
          <span className="text-white text-4xl font-bold ml-95 font-mono">Matthew Sinclaire Lim</span>
          </div>
        </div>
      </div>
    </div>
  </nav>
  );
} 
