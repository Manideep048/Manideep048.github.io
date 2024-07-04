import styles from './ProjectsStyles.module.css';
import viberr from '../../assets/converter.png';
import freshBurger from '../../assets/lock.png';
import ProjectCard from '../../common/ProjectCard';

function Projects() {
  return (
    <section id="projects" className={styles.container}>
      <h1 className="sectionTitle">Projects</h1>
      <div className={styles.projectsContainer}>
        <ProjectCard 
          src={viberr}
          link="https://github.com/Manideep048/Currency_Converter"
          h3="Currency Converter"
          // p="MWebpage"
        />
        <ProjectCard
          src={freshBurger}
          link="https://github.com/Manideep048/RandomPasswordGenerator2.com"
          h3="Random Password Generator"
          // p="Hamburger Restaurant"
        />
      </div>
    </section>
  );
}

export default Projects;
